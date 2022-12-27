
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
    <link rel="stylesheet" href="babysitter.css">
</head>
<body>
<?php
    if(isset($_SESSION['var2'])){
        unset($_SESSION['var2']);?>
        <script>
            alert('apply successfully');
        </script>
        <?php
    }?>
    <a href="daycare.php" ><Button >Home</Button></a>
    <div class="regform"><h1> Babysitter Application Form</h1></div>
    <div class="main">
    <form action="babysitter app core.php" method="POST">
            <div id="name">
                <h2>Applicant Information</h2>
                <lebel class="firstlebel">First name </lebel>
                <input class="firstname" type="text" name="fn1"><br><br>
                <lebel class="lastlebel">Last name</lebel>
                <input class="lastname" type="text" name="ln1"><br><br>
                <h3 id="gender">Gender</h3>
                <lebel class="radio">
                    <select name="gender" style="font-size: 16px;">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </lebel><br>
                <lebel class="education">Education</lebel>
                <input class="education" type="text" name="education"><br><br>
                <lebel class="address">Addrss</lebel>
                <input class="address" type="text" name="address"><br><br>
                <lebel class="email">Email</lebel>
                <input class="email" type="text" name="email"><br><br>
                <lebel class="phone">Phone</lebel>
                <input class="phone" type="text" name="phone"><br><br>
            </div>
            <button type="submit" name="submit" style="font-size: 25px;margin-top: 20px;margin-bottom: 20px;color: white;background-color: rgb(122, 7, 95);">Submit Application</button>
        </form>
    </div>
</body>
</html>