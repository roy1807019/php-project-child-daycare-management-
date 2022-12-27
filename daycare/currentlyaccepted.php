<?php
    include("dbconnections.php");
    $sql="SELECT * FROM currently_accepted";
    $run=mysqli_query($conn,$sql);
    $username="";
    $useremail="";
    $package="";
    $sql="";
    $str="";

    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Currently Accepted</title>
        <link rel="stylesheet" href="admin dashboard.css">
    </head>
    <body>
        <div class="admin">
        <div class="left">
            <a href="index.php"><img src="admin.png" alt="attach an image"></a>
            <h2 id="ad">Admin</h2>
            <a href="user_logout.php"><button id="logout">Logout</button></a><br><br>
            <p ><a href="admin dashboard.php">Enrollment Request</a></p>
            <p ><a href="users.php">Users</a></p>
            <p ><a href="currentlyaccepted.php">Currently Accepted</a></p>
            <p ><a href="waiting candidate.php">Waiting Candidate</a></p>
            <p ><a href="accepted candidate.php">Babysitter List</a></p>
        </div>

        <div class="request">
            <h1>Accepted Users Information</h1>

        <table>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Package</th>
                <th colspan="2">Admin Action</th>
            </tr>
           
            <tr>
            <?php
                while($data=mysqli_fetch_assoc($run)){
                $id=$data['id'];
                $username=$data['euser'];
                $useremail=$data['email'];
                $package=$data['package'];
            ?>
            <tr>
                <td><?php echo($username);?></td>
                <td><?php echo($useremail);?></td>
                <td><?php echo($package);?></td>
                <td style="background-color:red;"><a href="delete core currentlyaccepted.php?id=<?php echo($data['id']);?>" onclick='return checkdelete()'>Delete</a> </td>
            </tr>
            <?php
                }
                ?>
        </table>
        <script>
            function checkadd()
            {
                return confirm('Are you sure to add this job post?');
            }
            function checkdelete()
            {
                return confirm('Are you sure to delete this job post?');
            }
        </script>
        </div>
        
    </div>
</body>
</html>