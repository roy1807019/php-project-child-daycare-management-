<?php
    include("dbconnections.php");
    $id=$_GET['id'];
    $sql="SELECT * FROM waiting_candidate WHERE id='$id'";
    $run=mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($run);
    $fname=$data['fname'];
    $lname=$data['lname'];
    $gender=$data['gender'];
    $education=$data['education'];
    $address=$data['address'];
    $email=$data['email'];
    $phone=$data['phone'];
    $sql = "INSERT INTO babysitter_list(fname,lname,email,gender,education,address,phone)values('$fname','$lname','$email','$gender','$education','$address','$phone')";
    $sql2="DELETE FROM waiting_candidate WHERE id='$id'";
    $run = mysqli_query($conn,$sql);
    $run = mysqli_query($conn,$sql2);
    header("Location:waiting candidate.php");
?>