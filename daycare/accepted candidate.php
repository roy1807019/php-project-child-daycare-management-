<?php
include("dbconnections.php");
$sql="SELECT * FROM babysitter_list";
$run=mysqli_query($conn,$sql);
$fname="";
$lname="";
$useremail="";
$education="";
$sql="";
$str="";


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Babysitter list</title>
        <link rel="stylesheet" href="babysitter dashboard.css">
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
            <h1>Babysitter List</h1>

        <table>
            <tr>
                <th>First name</th>
                <th>Email</th>
                <th>Education</th>
                <th colspan="2">Admin Action</th>
            </tr>
            <?php
                while($data=mysqli_fetch_assoc($run)){
                $id=$data['id'];
                $fname=$data['fname'];
                $useremail=$data['email'];
                $education=$data['education'];
            ?>
            <tr>
                <td><?php echo($fname);?></td>
                <td><?php echo($useremail);?></td>
                <td><?php echo($education);?></td>
                <td style="background-color:red;"><a href="delete babysitter core.php?id=<?php echo($data['id']);?>" onclick='return checkdelete()'>Fire</a> </td>
            </tr>
            <?php
            }
            ?>
        </table>
        <script>
            function checkaccepted()
            {
                return confirm('Are you sure to accept the application?');
            }
            function checkdelete()
            {
                return confirm('Are you sure to fire the employee?');
            }
        </script>
        </div>
        
    </div>
</body>
</html>