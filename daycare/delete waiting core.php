<?php
    include("dbconnections.php");
    $id=$_GET['id'];
    $sql="DELETE FROM waiting_candidate WHERE id='$id'";
    $run=mysqli_query($conn,$sql);

    if($run){
        header("Location:waiting candidate.php");
    }
    else{
        echo "Failed to delete the record";
    }
?>