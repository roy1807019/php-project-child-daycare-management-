<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>sign up</title>
	<link rel="stylesheet" href="signup.css">
</head>
<body>
<a href="daycare.php" ><Button >Home</Button></a>
	<div class="sign_up">
		<h1>Sign Up</h1>
		<form action="signup core.php" method="POST">
		<?php 
		if(isset($_SESSION['invalid'])){ unset($_SESSION['invalid']) ?>
	<script>
		alert("username is already taken");
	</script>
<?php } 
?>
			<label>Username</label>
			<input type="text" name="username" placeholder="username" required>
			<label > First Name</label>
			<input type="text" name="fname" placeholder="first_name" required>
			<label>Last Name</label>
			<input type="text" name="lname" placeholder="last_name" required>
			<label>Email</label>
			<input type="email" name="email" placeholder="xyz@gmail.com" required>
			<label>Password</label>
			<input type="password" name="password" placeholder="password" required>
			<label>Confirm Password</label>
			<input type="password" name="confirmpassword" placeholder="confirm password" required>
			<input type="submit" value="Sign Up">
		</form>
		<p>Already have an account?<a href="login.php"> Log in</a></p>
	</div>
	
</body>
</html>