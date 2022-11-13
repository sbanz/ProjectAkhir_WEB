<?php 
    session_start();
    if(isset($_SESSION["sida"]) or isset($_SESSION["sidu"])){}
    else {
        header("Location: login/login.php", TRUE, 301);
        die();
    }
    
    $now = time();
    if($now > $_SESSION['expire']) {
        session_unset();
        session_destroy();
        echo "<script LANGUAGE='JavaScript'>
                window.alert('Sesi habis, mohon login ulang!');
                window.location.href='login/login.php';
            </script>";
        die();
    }
?>