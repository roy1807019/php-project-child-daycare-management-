<?php
    session_start();

    include("dbconnections.php");

    $username=$_REQUEST['username'];
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['password'];
    $conpass = $_REQUEST['confirmpassword'];

    $sql =" select * from user where user_name='$username'";
    $run2 =mysqli_query($conn,$sql);
    if(mysqli_num_rows($run2)>0){
        $_SESSION['invalid']="abc";
        header("Location:signup.php");
    }
    else if($pass==$conpass){

        $sql = "INSERT INTO user (user_name,first_name,last_name,email,password) VALUES('$username','$fname','$lname','$email','$pass')";
        $run = mysqli_query($conn,$sql);
        header("Location:daycare.php");
    }
    else{
        header("Location:signup.php");
    }
?>