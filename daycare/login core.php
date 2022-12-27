<?php
    session_start();
    include("dbconnections.php");
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['password'];
    if($email=='adminpage@gmail.com'&& $pass=='sroy'){
        header("location:admin dashboard.php");
    }
    else{

        $query = "SELECT * FROM user where email='$email' AND  password='$pass'";
        $run = mysqli_query($conn,$query);
        if(mysqli_num_rows($run)>0){
            //$_SESSION['email']=$email;
            setcookie('email',$email,time()+86400,"/");
            $data=mysqli_fetch_assoc($run);
            $_SESSION['username']=$data['user_name'];
            header("Location:daycare.php");
        }
        else{
            $_SESSION['invalid']="True";
             header("Location:login.php");
        }
    }
?>