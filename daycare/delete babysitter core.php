<?php
    include("dbconnections.php");
    $id=$_GET['id'];
    $sql="DELETE FROM babysitter_list WHERE id='$id'";
    $run=mysqli_query($conn,$sql);

    if($run){
        header("Location:accepted candidate.php");
    }
    else{
        echo "Failed to delete the record";
    }
?>