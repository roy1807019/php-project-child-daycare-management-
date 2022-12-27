<?php
    include("dbconnections.php");
    $sql="SELECT * FROM enrollment";
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
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="admin dashboard.css">
    </head>
    <body>
        <div class="admin">
        <div class="left">
            <a href="daycare.php"><img src="admin.png" alt="attach an image"></a>
            <h2 id="ad">Admin</h2>
            <a href="user_logout.php"><button id="logout">Logout</button></a><br><br>
            <p ><a href="admin dashboard.php">Enrollment Request</a></p>
            <p ><a href="users.php">Users</a></p>
            <p ><a href="currentlyaccepted.php">Currently Accepted</a></p>
            <p ><a href="waiting candidate.php">Waiting Candidate</a></p>
            <p ><a href="accepted candidate.php">Babysitter List</a></p>
        </div>

        <div class="request">
            <h1>Request for Enrollment</h1>

        <table>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Package</th>
                <th colspan="2">Admin Action</th>
            </tr>
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
                <td><a href="accepted core.php?id=<?php echo($data['id']);?>" onclick='return checkaccepted()'>Accept</a> </td>
                <td style="background-color:red;"><a href="delete core enrollment request.php?id=<?php echo($data['id']);?>" onclick='return checkdelete()'>Ignore</a> </td>
            </tr>
            <?php
            }
            ?>
        </table>
        <script>
            function checkaccepted()
            {
                return confirm('Are you sure to accept the enrollment request?');
            }
            function checkdelete()
            {
                return confirm('Are you sure to ignore the enrollment request?');
            }
        </script>
        </div>
        
    </div>
</body>
</html>