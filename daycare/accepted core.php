<?php
    include("dbconnections.php");
    $id=$_GET['id'];
    $sql="SELECT * FROM enrollment WHERE id='$id'";
    $run=mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($run);
    $username=$data['euser'];
    $child_fname=$data['child_fname'];
    $child_lname=$data['child_lname'];
    $gender=$data['gender'];
    $guardian_fname=$data['guardian_fname'];
    $guardian_lname=$data['guardian_lname'];
    $address=$data['address'];
    $email=$data['email'];
    $phone=$data['phone'];
    $package=$data['package'];
    $sql = "INSERT INTO currently_accepted(euser,child_fname,child_lname,gender,guardian_fname,guardian_lname,address,email,phone,package) VALUES('$username','$child_fname','$child_lname','$gender','$guardian_fname','$guardian_lname','$address','$email','$phone','$package')";
    $sql2="DELETE FROM enrollment WHERE id='$id'";
    $run = mysqli_query($conn,$sql);
    $run = mysqli_query($conn,$sql2);
    header("Location:admin dashboard.php");
?>