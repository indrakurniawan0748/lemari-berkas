<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal E-Document's</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-lg">
        <div class="row">
            <div class="col-12 g-3">
                <div class="card" style="width: 30rem;margin-left: 25%;margin-top:25%">
                    <form action="dasboard.php" method="POST">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Email" autocomplete="off" autofocus>
                                </div>
                                <div class="col">
                                    <input type="password" class="form-control" placeholder="Password" autocomplete="off">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 g-3">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary" type="submit">LOGIN</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>