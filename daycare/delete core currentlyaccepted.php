<?php
    include("dbconnections.php");
    $id=$_GET['id'];
    $sql="DELETE FROM currently_accepted WHERE id='$id'";
    $run=mysqli_query($conn,$sql);

    if($run){
        header("Location:currentlyaccepted.php");
    }
    else{
        echo "Failed to delete the record";
    }
?>