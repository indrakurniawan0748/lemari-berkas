<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/fontawesome.min.css"/>
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/font/themify-icons.css">
    <script src="asset/js/jquery-3.1.1.min.js"></script>
    <title>E-Document | Citra Bangsa School</title>
    
    <style>
        body, html {
            font-family: "Roboto", sans-serif;
            color: #747794;
            overflow-x: hidden;
            background-color: #e7eaf5;
            overflow: hidden;
            user-select: none;
        }
        .title{
            font-family: "Roboto", sans-serif;
            color: #747794;
            font-size: 25px;
            font-weight: bold;
        }
        .menu{
            text-align: center;
            border-radius: 0.75rem;
            cursor:pointer;
        }
        .submenu{
            border-radius: 0.75rem;
        }
        .menu-right{
            text-align: center;
            border-radius: 0.75rem;
        }
        .menu:hover{
            
            transform: translateY(-15px);
            transition: 0.5s;
            /* border: 1px solid #86b7fe;
            border-radius: 0.75rem;
            box-shadow: 0 0 0 0.1rem ; */
            
        }
        .menu-cat:hover{
            
            transform: translateX(15px);
            transition: 0.5s;
            /* border: 1px solid #86b7fe;
            border-radius: 0.75rem;
            box-shadow: 0 0 0 0.1rem ; */
            
        }
        .menu span {
            display: block;
            font-size: 16px;
            font-weight: 700;
            line-height: 1;
            color: #747794;
        }
        .menu-cat{
            cursor:pointer;
        }
        a, a:hover{
            /* webkit-transition-duration: 500ms;
            transition-duration: 500ms; */
            text-decoration: none;
            /* outline: 0 solid transparent;
            -webkit-box-shadow: none;
            box-shadow: none; */
            color: #100DD1;
        }
        td{
        font-size:12px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-sm-6 g-3">
                <div class="card">
                    <div class="card-body">
                        <span class="title">e-Document's</span>
                        <button type="button" class="btn btn-danger btn-sm float-end">logout</button>
                        <span class="float-end" style="margin-right:20px"><?php echo date('d F Y')?></span>
                        
                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search document..." autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-4 konten">
                <!-- ================================================ HOME ========================== -->
                <div class="row klik_menu">
                    <div class="col-3 g-3">
                        <div class="card menu" style="width: 13.2;">
                            <a href="#" id="sekolah">
                                <div class="card-body">
                                    <img src="asset/img/menu/sekolah.jpg" style="height:100px;margin-bottom: 0.75rem;">
                                    <span>SEKOLAH</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-3 g-3">
                        <div class="card menu" style="width: 13.2;">
                            <a href="#" id="siswa">
                                <div class="card-body">
                                    <img src="asset/img/menu/siswa.jpg" style="height:100px;margin-bottom: 0.75rem;">
                                    <span>SISWA</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-3 g-3">
                        <div class="card menu" style="width: 13.2;">
                            <a href="#" id="guru">
                                <div class="card-body">
                                    <img src="asset/img/menu/guru.jpg" style="height:100px;margin-bottom: 0.75rem;">
                                    <span>GURU</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-3 g-3">
                        <div class="card menu" style="width: 13.2;">
                            <a href="#" id="karyawan">
                                <div class="card-body">
                                    <img src="asset/img/menu/karyawan.jpg" style="height:100px;margin-bottom: 0.75rem;">
                                    <span>KARYAWAN</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-3 g-3">
                        <div class="card menu" style="width: 13.2;">
                            <a href="#" id="surat">
                                <div class="card-body">
                                    <img src="asset/img/menu/surat.jpg" style="height:100px;margin-bottom: 0.75rem;">
                                    <span>SURAT-SURAT</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-3 g-3">
                        <div class="card menu" style="width: 13.2;">
                            <a href="#" id="keuangan">
                                <div class="card-body">
                                    <img src="asset/img/menu/keuangan.jpg" style="height:100px;margin-bottom: 0.75rem;">
                                    <span>KEUANGAN</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-3 g-3">
                        <div class="card menu" style="width: 13.2;">
                            <a href="#" id="menu">
                                <div class="card-body">
                                    <img src="asset/img/menu/gembok.jpg" style="height:100px;margin-bottom: 0.75rem;">
                                    <span>MENU</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-3 g-3">
                        <div class="card menu" style="width: 13.2;">
                            <a href="#" id="menu">
                                <div class="card-body">
                                    <img src="asset/img/menu/gembok.jpg" style="height:100px;margin-bottom: 0.75rem;">
                                    <span>MENU</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-3 g-3">
                        <div class="card menu" style="width: 13.2;">
                            <a href="#" id="menu">
                                <div class="card-body">
                                    <img src="asset/img/menu/gembok.jpg" style="height:100px;margin-bottom: 0.75rem;">
                                    <span>MENU</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-3 g-3">
                        <div class="card menu" style="width: 13.2;">
                            <a href="#" id="menu">
                                <div class="card-body">
                                    <img src="asset/img/menu/gembok.jpg" style="height:100px;margin-bottom: 0.75rem;">
                                    <span>MENU</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-3 g-3">
                        <div class="card menu" style="width: 13.2;">
                            <a href="#" id="menu">
                                <div class="card-body">
                                    <img src="asset/img/menu/gembok.jpg" style="height:100px;margin-bottom: 0.75rem;">
                                    <span>MENU</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-3 g-3">
                        <div class="card menu" style="width: 13.2;">
                            <a href="#" id="setting">
                                <div class="card-body">
                                    <img src="asset/img/menu/setting.jpg" style="height:100px;margin-bottom: 0.75rem;">
                                    <span>SETTING</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- ========================================================= -->
            </div>


            <div class="col-sm-4 col-sm-2 g-3">
                <div class="card menu-right">
                    <div class="card-body">
                        LAST UPLOAD
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">User</th>
                            <th scope="col">Category</th>
                            <th scope="col">Type</th>
                            <th scope="col">Times</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Admin 1</td>
                                <td>Siswa</td>
                                <td>PDF</td> 
                                <td>27 Nov 2022, 14.30</td>
                            </tr>
                            <tr>
                                <td>admin 2</td>
                                <td>Sekolah</td>
                                <td>JPG</td> 
                                <td>25 Nov 2022, 13.40</td>
                            </tr>
                            <tr>
                            <tr>
                                <td>admin 1</td>
                                <td>Guru</td>
                                <td>PDF</td> 
                                <td>20 Nov 2022, 10.55</td>
                            </tr>
                        </tbody>
                        </table>



                </div>
            </div>
        </div>
    </div>
    
<style>
#context-menu {
  position: absolute;
  z-index:10000;
  width:170px;
  background:#1b1a1a;
  border-radius:5px;
  transform:scale(0);
  transform-origin:top left;
}
#context-menu.active {
  transform:scale(1);
  transition:transform 300ms ease-in-out;
}
#context-menu .item {
  padding:8px 10px;
  font-size:15px;
  color:#eee;
}
#context-menu .item:hover {
  background:#555;
}

#context-menu .item i {
  display:inline-block;
  margin-right:5px;
}
#context-menu hr {
  margin:2px 0px;
  border-color:#555;
}
</style>

<div id="context-menu">
 
  <div class="item">
    <a href="" target="_blank" class="pk" style="color:#BDBDC7 !important" id="upload"><i class="ti-upload"></i> Upload Berkas</a>
  </div>
  <div class="item">
    <a href="" target="_blank" class="pl" style="color:#BDBDC7 !important" id="edit_cat"><i class="ti-pencil"></i> Edit Category</a>
  </div>
  <div class="item">
    <a href="" target="_blank" class="ps" style="color:#BDBDC7 !important" id="delete_cat"><i class="ti-trash"></i> Delete Category</a>
  </div>
</div>

<script src="asset/js/popper.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>


<script>
$(document).ready(function(){
    $('.klik_menu a').click(function(){
        var hal = $(this).attr('id');
        $('.konten').load('kategori/'+hal+'.php');
        return false;
    });

    $('#upload').on('click', function(){
        var hal = $(this).attr('id');
        $('#dokumenSiswa').modal('show');
        return false;
    });
    $('#edit_cat').on('click', function(){
        var hal = $(this).attr('id');
        $('#dokumenSiswa').modal('show');
        return false;
    });
    $('#delete_cat').on('click', function(){
        var hal = $(this).attr('id');
        $('#dokumenSiswa').modal('show');
        return false;
    });
});
</script>




<!-- ========================== BAGAN MODAL==================================== -->
<!-- Modal -->
<div class="modal fade" id="dokumenSiswa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Upload Dokumen Siswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        bagian body halaman
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>


</body>
</html>