<?php

session_start();
include 'config.php';
if(isset($_SESSION['login'])){
    header("Location: index.php");
    exit;
}
    include 'config.php';
    if(isset($_POST['login'])){
        $username = $_POST['user'];
        $password = $_POST['password'];

        $result = mysqli_query($koneksi, "SELECT * FROM login_user WHERE username = '$username' OR email = '$username'");

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            
            if(password_verify($password, $row['password'])){
                $_SESSION['login'] = true;
                header("Location: index.php");
                exit;
            }
        }
        $error = true;
    }

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <style>
    .register{
        margin : 30px 0;
        text-align: center;
        font-size: 16px;
        color: black;
    }

    .register a{
        color : #2596be;
        text-decoration: none;
    }

    .register a:hover{
        text-decoration: underline;
    }
    </style>

    <div class="center">
        <h1>LOGIN</h1>
        <?php if(isset($error)){
            echo "<p align = center style='color:red;'> Username atau Password Salah!</p>";
        }?>
        <form id="login-form" method="post">
            <div class="txt_field">
                <input type="text" name = "user" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name = "password" required>
                <span></span>
                <label>Password</label>
            </div>
            
        <input type="submit" name = "login" value="Login">
        <div class = "register">
                Belum Ada Akun? <a href="register.php">Register</a>
        </div>
        </form>
    </div>
</body>
</html>