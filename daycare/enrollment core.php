<?php
    include("dbconnections.php");
    
    session_start();
    $username=""."{$_SESSION['username']}"; echo $username;
    $child_fname=$_REQUEST['fn1'];
    $child_lname = $_REQUEST['ln2'];
    $gender = $_REQUEST['gender'];
    $guardian_fname = $_REQUEST['fn2'];
    $guardian_lname= $_REQUEST['ln2'];
    $address= $_REQUEST['address'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $package= $_REQUEST['package'];
   
        $sql = "INSERT INTO enrollment (euser,child_fname,child_lname,gender,guardian_fname,guardian_lname,address,email,phone,package)values('$username','$child_fname','$child_lname','$gender','$guardian_fname','$guardian_lname','$address','$email','$phone','$package')";
        $run = mysqli_query($conn,$sql);
        if($run)
        $_SESSION['var']='abc';
       header("Location:enrollment.php");
?>