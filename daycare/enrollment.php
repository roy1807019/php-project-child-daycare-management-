<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment</title>
    <link rel="stylesheet" href="enrollment.css">
</head>
<body>
    <?php
    if(isset($_SESSION['var'])){
        unset($_SESSION['var']);?>
        <script>
            alert('enrollment successful');
        </script>
        <?php
    }?>
    <a href="daycare.php" ><Button >Home</Button></a>
    <div class="regform"><h1> Enrollment Form</h1></div>
    <div class="main">
        <form action="enrollment core.php" method="POST">
            <div id="name">
                <h2>Child's Information</h2>
                <lebel class="firstlebel">first name </lebel>
                <input class="child firstname" type="text" name="fn1"><br><br>
                <lebel class="lastlebel">last name</lebel>
                <input class="child lastname" type="text" name="ln1"><br><br>
                <h3 id="gender">Gender</h3>
                <lebel class="radio">
                    <select name="gender" style="font-size: 16px;">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </lebel><br>

                <h2>Guardian's Information</h2>
                <lebel class="firstlebel">first name</lebel>
                <input class="g firstname" type="text" name="fn2"><br><br>
                <lebel class="lastlebel">last name</lebel>
                <input class="g lastname" type="text" name="ln2"><br><br>
                <lebel class="address">Addrss</lebel>
                <input class="address" type="text" name="address"><br><br>
                <lebel class="email">Email</lebel>
                <input class="email" type="text" name="email"><br><br>
                <lebel class="phone">Phone</lebel>
                <input class="phone" type="text" name="phone"><br><br>

                <h2>Package Type</h2>
                <select name="package" style="font-size: 20px;">
                    <option value="package-01">Package-01</option>
                    <option value="package-02">Package-02</option>
                    <option value="package-03">Package-03</option>
                </select>
            </div>
            <button type="submit" name="submit" style="font-size: 25px;margin-top: 20px;margin-bottom: 20px;color: white;background-color: rgb(15, 7, 122);">Submit Enrollment</button>
        </form>
    </div>
</body>
</html>