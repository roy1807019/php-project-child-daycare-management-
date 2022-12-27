<?php
 session_start();
 $str="SIGN UP";
 $str2="LOG IN";
 if(isset($_SESSION['username'])){$str=""."{$_SESSION['username']}";
 $str2="LOG OUT";
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Child day care</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <section class="header">
        <nav>
            <div class="nav-links">
                <ul>
                    <li><a href="daycare.php">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="package.html">PACKAGES</a></li>
                    <li><a href="babysitter app.php">APPLY_FOR_JOB</a></li>
                    <li><a href="enrollment.php">ENROLLMENT</a></li>
                    <li><a href="signup.php"><?php echo($str) ?></a></li>
                    <?php
                    if($str2=="LOG OUT"){?>

                        <li><a href="user_logout.php"><?php echo($str2) ?></a></li>
                   <?php }
                    else{?>
                        <li><a href="login.php"><?php echo($str2) ?></a></li>
                    <?php } ?>
                    <!-- <li><a href="user_logout.php">LOG OUT</a></li> -->
                </ul>
            </div>
        </nav>
        <div class="text-box">
                <h1>Our service your happiness</h1>
                <p>This is one of the best child day care centre of our country.<br> has a well trained team to take care of your baby.</p>
                <a href="about.html" class="hero-btn">visit us to know more</a>
        </div>
    </section>
    </body>
</html>