<?php
// session_start();
// if(isset($_SESSION['admin_username'])) {
//   header("location:admin_depan.php");
// }
// include("db-user.php");
// $username = '';
// $password = '';
// $err = '';
// if(isset($_POST['login'])) {
//   $username = $_POST['username'];
//   $passsword = $_POST['password'];
//   if ($username == '' or $password == '') {
//     $err .= "<li>Silahkan masukkan username dan password</li>";
//   }
//   if(empty($err)) {
//     $sql1 = "select * from admin where username = '$username '";
//     $q1 = mysqli_query($koneksi,$sql1);
//     $r1 = mysqli_fetch_array($q1);
//     if($r1['password'] != md5($password)) {
//       $err .= "<li>Akun tidak ada</li>";
//     }
//   }
//   if(empty($err)) {
//     $_SESSION['admin_username'] = $username;
//     header("location:admin_depan.php");
//     exit();
//   }
// }
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
                    <img src="pict/logo_cafe.png" alt="logo" height="90px" width="90px">
                    <h3>COFFEE HOUSE</h3>
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
                          <form class="form-login" method="post" action="">
                              <label class="form-label">Username</label>
                              <input type="text" name="username" class="form-input" placeholder="Input your Username">
                              <label class="form-label">Password</label>
                              <input type="password" name="password" class="form-input" placeholder="Input your Password">
                              <input type="submit" name="login"  class="btn-login" value="Login">
                          </form>  
                          <p>Don't have an acoount?<span><a href="create-acc.php" class=""> Regist here</a></span></p>
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