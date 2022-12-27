<?php
    include("dbconnections.php");
    
    session_start();
    $fname=$_REQUEST['fn1'];
    $lname = $_REQUEST['ln1'];
    $gender = $_REQUEST['gender'];
    $education= $_REQUEST['education'];
    $address= $_REQUEST['address'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
   
        $sql = "INSERT INTO waiting_candidate (fname,lname,email,gender,education,address,phone)values('$fname','$lname','$email','$gender','$education','$address','$phone')";
        $run = mysqli_query($conn,$sql);
        if($run)
        $_SESSION['var2']='abc';
       header("Location:babysitter app.php");
?>