<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style  type="text/css">
        body {
            background-image: url("assets/img/Map-Square.png");
            padding: 0;
            margin: 0;
        }
        .login-page {
            width: 100%;
            padding: 8% 0 0;
            margin: auto;
        }
        .container {
            position: relative;
            z-index: 1;
            background: #F7F7F5;
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
            border-radius: 15px;
        }
    </style>
</head>
<body>
    <div class="login-page">
        <div class="container">
            <form action="<?php echo site_url('main/save_login');?>" method="POST" autocomplete="off">
                <h5>Selamat Datang di <strong>Suku.id</strong></h5>
                <h6>Silakan login terlebih dahulu</h6>
                <br>
                <div class="col-sm-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="Username" name="username" placeholder="Username" autofocus required>
                        <label for="floatingInput">Username</label>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="Password" name="password" placeholder="Password" required>
                        <label for="floatingInput">Password</label>
                    </div>
                </div>
                <br>
                <button class="btn btn-outline-primary">Login</button><br><br>
                <p>Belum punya akun? <strong><a href="<?php echo site_url('main/register');?>">Daftar</a></strong></p>
            </form>
        </div>
    </div>
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>