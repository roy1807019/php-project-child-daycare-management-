<?php
    include("dbconnections.php");
    $id=$_GET['id'];
    $sql="DELETE FROM enrollment WHERE id='$id'";
    $run=mysqli_query($conn,$sql);

    if($run){
        header("Location:admin dashboard.php");
    }
    else{
        echo "Failed to delete the record";
    }
?>