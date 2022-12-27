<?php
    include("dbconnections.php");
    $sql="SELECT * FROM user";
    $run=mysqli_query($conn,$sql);
    $id;
    $username="";
    $useremail="";
    $userpassword="";
    
?>


<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
    <link rel="stylesheet" href="admin dashboard.css">
</head>
<body>
    <div class="admin">
        <div class="left">
            <a href="daycare.php"><img src="admin.png" alt=""></a>
            <h2 id="ad">Admin</h2>
            <a href="user_logout.php"><button id="logout">Logout</button></a><br><br>
            <p ><a href="admin dashboard.php">Enrollment Request</a></p>
            <p ><a href="users.php">Users</a></p>
            <p ><a href="currentlyaccepted.php">Currently Accepted</a></p>
            <p ><a href="waiting candidate.php">Waiting Candidate</a></p>
            <p ><a href="accepted candidate.php">Babysitter List</a></p>
        </div>
        <div class="request">
            <h1>All Users</h1>

        <table>
            <tr>
                <th>Username</th>
                <th>User-Email</th>
                <th>User-Password</th>
                <th>Admin-Action</th>
            </tr>
            <?php
                while($data=mysqli_fetch_assoc($run)){
                $id=$data['id'];
                $username=$data['user_name'];
                $useremail=$data['email'];
                $userpassword=$data['password'];
            ?>
            <tr>
                <td><?php echo($username);?></td>
                <td><?php echo($useremail);?></td>
                <td><?php echo($userpassword);?></td>
                <td style="background-color:red;"> <a href="delete core users.php?id=<?php echo($id);?>" onclick='return checkdelete()' >Delete</a> </td>
            </tr>
            <?php
            }
            ?>
        </table>
        <script>
            function checkdelete()
            {
                return confirm('Are you sure to delete this user?');
            }
        </script>
        </div>
        
    </div>
</body>
</html>