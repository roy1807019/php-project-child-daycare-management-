<?php
 include("dbconnections.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<a href="daycare.php" ><Button >Home</Button></a>
    <div class="login">
        <?php
            if(isset($_SESSION['invalid']))
            {
                unset($_SESSION['invalid']);
              ?>
                <script>
                    alert("Invalid 'email' or 'password'");
                </script>
                
                <?php
                
            }
        ?>
        <h1>Log in</h1>
        <form action="login core.php" method="POST">
            <label>Email</label>
            <input type="email" name="email" placeholder="adminpage@gmail.com">
            <label>Password</label>
            <input type="password" name="password">
            <input type="submit" name="submit" value="Login">
            <p>Don't have an account? <a href="signup.php">Sign up</a></p>
        </form>
    </div>
</body>
</html>