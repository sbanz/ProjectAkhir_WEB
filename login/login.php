<?php
    require '../connect.php';

    if(isset($_POST['Login'])){
        $username = $_POST["username"];
        $pass = $_POST["pass"];
        $hasil = mysqli_query($koneksi, "SELECT username, pass, sta FROM user WHERE username = '$username'");

        if(mysqli_num_rows($hasil)== 1){
            $row = mysqli_fetch_assoc($hasil);

            if(password_verify($pass, $row['pass'])){

                if($row['sta'] == 'admin') {
                    session_start();
                    if(isset($_SESSION["sida"])) {
                        header("Location: ../admin/index_admin.php", TRUE, 301);
                        die();
                    }
                    else {
                        $_SESSION["start"] = time(); 
                        $_SESSION["expire"] = $_SESSION['start'] + (30 * 60) ;
                        $_SESSION["sida"] = session_id();
                        header("Location: ../admin/index_admin.php", TRUE, 301);
                        die();
                    }
                }
                elseif ($row['sta'] == 'user') {
                    session_start();
                    if(isset($_SESSION["sidu"])) {
                        header("Location: ../index.html", TRUE, 301);
                        die();
                    }
                    else {
                        $_SESSION["start"] = time(); 
                        $_SESSION["expire"] = $_SESSION['start'] + (30 * 60) ;
                        $_SESSION["sidu"] = session_id();
                        header("Location: ../index.html", TRUE, 301);
                        die();
                    }
                }
                else {
                    header("Location: login.php", TRUE, 301);
                    die();
                }
            }
            else{
                echo "<script LANGUAGE='JavaScript'>
                        window.alert('Password salah');
                        window.location.href='login.php';
                    </script>";
                die();
            }
        }
        else{
            echo "<script LANGUAGE='JavaScript'>
                    window.alert('Username atau Password Salah!');
                    window.location.href='login.php';
                </script>";
            die();
        }
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
                        <input type="checkbox">
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
              <div class="box-login">
                  <div class="card-main">
                      <div class="login-header">Form Login Email</div>
                      <div class="login-body">
                          <form class="form-login" method="post" action="./login.php">
                              <label class="form-label">Username</label>
                              <input type="text" name="username" class="form-input" placeholder="Input your Username">
                              <label class="form-label">Password</label>
                              <input type="password" name="pass" class="form-input" placeholder="Input your Password">

                              <input type="submit" name="Login"  class="btn-login" value="Login">
                          </form>  
                          <p>Don't have an acoount?<span><a href="register.php" class=""> Regist here</a></span></p>
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