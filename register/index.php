<?php

require 'process.php';

if(isset($_POST["register"])){
    if(tambahUser($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Register Berhasil, Silahkan Login')
            window.location = '../login/index.php'
        </script>
        ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Mohon Maaff, pendaftran gagal')
            window.location = 'index.php'
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container-box">
        <center><h3>Register Your Account</h3></center>
        

        <form action="" method="POST">
            <label>Username</label>
            <input type="text" name="username" id="" class="form-control"><br/> <br/>

            <label>Nama Lengkap</label>
            <input type="text" name="name" id="" class="form-control"><br> <br>

            <label>Password</label>
            <input type="password" name="password" id="" class="form-control"><br><br>

            <label>Roles</label>
            <select name="roles" id="" class="form-control">
                <option value="#">Pilih</option>
                <option value="customer">Customer</option>
            </select><br> <br>

            <button type="submit" name="register">Register</button>

            <div class="login">
                <small>Sudah punya akun?<br>
                <a href="../login/index.php">Login</a>
                </small>
            </div>
        </form>
    </div>
</body>
</html>