<?php
    require "../connect.php";

    if(isset($_POST["signup"])){
        $user = $_POST["user"];
        $pass = $_POST["pass"];
        $cpass = $_POST["cpass"];

        $check = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$user' ");
        if( mysqli_fetch_assoc($check) ){
            echo "<script LANGUAGE='JavaScript'>
                    window.alert('Username telah digunakan!');
                    window.location.href='register.php';
                </script>";
            die();
        }
        else{
            if($pass == $cpass){
                $pass = password_hash($pass, PASSWORD_DEFAULT);
                $sql = "INSERT INTO user VALUES ('', '$user', '$pass', 'user')";
                $result = mysqli_query($koneksi, $sql);
    
                if ( $result ){
                    echo "<script LANGUAGE='JavaScript'>
                            window.alert('Akun Berhasil Ditambah');
                            window.location.href='login.php';
                        </script>";
                    die();
                }
                else{
                    echo "<script LANGUAGE='JavaScript'>
                            window.alert('Akun Gagal Ditambah');
                            window.location.href='register.php';
                        </script>";  
                    die();
                }
            }
            else{
                echo "<script LANGUAGE='JavaScript'>
                        window.alert('Password tidak sama');
                        window.location.href='register.php';
                    </script>";
                die();
            }
        }
    }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" type="text/css" href="form.css">
    <script src="scripts.js defer"></script> 
  </head>

  <body>
    <header>
      <section class="navigation">
        <div class="container">
            <div class="box-nav">
                <div class="box">
                    <img src="../pict/logo_cafe.png" alt="logo" height="90px" width="90px">
                    <h3>COFFEE HOUSE</h3>
                    <label>
                        <input tym m pe="checkbox">
                        <span class="check"><i class="ri-toggle-fill"></i></span>
                    </label>
                </div>
            </div>  
        </div>
      </section>
    </header>

    <div class="wrapper">   
        <div class="container">
            <div class="content">
                <div class="box-create">
                    <div class="card-main">
                        <div class="login-header">Form Create New Account</div>
                        <div class="login-body">
                            <form id='signup' class="form-login" method="post" action="./register.php">

                                <label class="form-label">Username</label>
                                <input type="text" name="user" placeholder="your name..." class="form-input">

                                <label class="form-label">Password</label>
                                <input type="password" name="pass" placeholder="Anything else..." class="form-input">

                                <label class="form-label">Confirm Password</label>
                                <input type="password" name="cpass" placeholder="Just re-Input your password again..." class="form-input">

                                <div class="btn">
                                  <input type="submit" class="button" value="Create Account" name='signup'>
                                  <a href="index_login.php" class="button" >Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
      <div class="container">
        <p><a href="https://github.com/sbanz/ProjectAkhir_WEB">© PA Web, 2022. All rights reserved</a></p>
      </div>
    </footer>

  </body>
</html>