<?php
    session_start();
    setcookie('email',"",time()-10,"/");
    unset($_SESSION['password']);
    unset($_SESSION['username']);
    header("Location:daycare.php");
?>