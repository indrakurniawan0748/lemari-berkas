<?php
$uploadDir = 'asset/lemari-berkas/';
$response = array(
    'status' => 0,
    'message' => 'Data gagal disimpan, silahkan ulangi.'
);

// jika form berhasil disimpan, maka jalankan ini:
    if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['file'])){
        // GET data dari form
        $name   = $_POST['name'];
        $email  = $_POST['email'];

        // Check Data aga tidak kosong
        if(!empty($name) && !empty($email)){
            // validasi email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                $response['message'] = 'Please enter a valid email.';
            }else{
                $uploadStatus = 1;

                // upload file
                $uploadedFile = '';
                if(!empty($_FILES['file']['name'])){

                    // files path config
                    $fileName = basename($_FILES['file']['name']);
                    $targetFilePath = $uploadDir . $fileName;
                    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

                    // Format file yang diijinkan untuk diupload
                    $allowTypes = array('pdf','png','jpg','jpeg');
                    if(in_array($fileType,$allowTypes)){
                        // Upload file ke SERVER
                        if(move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)){
                            $uploadedFile = $fileName;
                        }else{
                            $uploadStatus = 0;
                            $response['message'] = 'Sorry, There was an error uploading your file.';
                        }
                    }else{
                        $uploadStatus = 0;
                        $response['message'] = 'Sorry, only PDF, PNG, JPG and JPEG files are allowed to upload.';
                    }
                }

                if($uploadStatus == 1){
                    include_once 'dbconfig.php';

                    // insert form data ke database
                    $insert = $db->query("INSERT INTO form_data (name,email,file_name) VALUES ('".$name."','".$email."','".$uploadedFile."')");

                    if($insert){
                        $response['status'] = 1;
                        $response['message'] = 'Data berhasil disimpan.';
                    }

                }
            }
        }else{
            $response['message'] = 'Tolong isi semua kolom yang wajib';
        }
    }

    // Return Response
    echo json_encode($response);