<?php

	error_reporting(0);
	session_start();
	session_destroy();
	if($_SESSION['message'])
	{
		$message=$_SESSION['message'];
		echo"<script type='text/javascript'>
		alert('$message');
		</script>";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gym Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
	<nav>
		<label class="logo">Fit Freaks</label>
		<ul>
			<li><a href="" class="btn btn-success">Home</a></li>
			<li><a href="http://127.0.0.1/GymManagementSystem/login.php" class="btn btn-success">Login</a></li>
			<li><a href="" class="btn btn-success">Contact</a></li>
		</ul>
	</nav>

	<div class="section1">
		<label class="img_text">Elevate Your Fitness Journey with Us!</label>
		<img class="main_image" src="pexels-william-choquette-1954524.jpg">
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-4">	
				<img class="one_img" src="pexels-karolina-grabowska-4397841.jpg">
			</div>
			<div class="col-md-8">
				<h1>Welcome to Fit Freaks!</h1>
				<p>Welcome to our Fit Freaks Gym Management System, where fitness meets efficiency. Designed to streamline and enhance every aspect of your gym experience, our system brings together advanced technology and user-friendly interfaces to provide both gym owners and members with a comprehensive solution for managing memberships, scheduling tasks, tracking announcements and offers, and ensuring a smooth fitness journey. Whether you're a fitness enthusiast looking for seamless workout sessions or a gym owner striving for operational excellence, our Gym Management System is here to revolutionize the way you engage with fitness.
				</p>
			</div>
		</div>
	</div>

	<center>
		<div class="registration_form">
			<center class="title_deg">
				Registration Form
			</center>
		<form action="data_check.php" method="POST" class="reg_form">
			<div class="adm_int">
				<label class="label_txt"> Full Name</label>
				<input class="input_des" type="text" name="FullName">
			</div>
			<div class="adm_int">
				<label class="label_txt">Age</label>
				<input class="input_des" type="Number" name="Age">
			</div>
			<div class="adm_int">
				<label class="label_txt">Gender</label>
				<select class="input_des" name="Gender">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Other">Other</option>
				</select>
			</div>
			<div class="adm_int">
				<label class="label_txt">Email</label>
				<input class="input_des" type="text" name="Email">
			</div>
			<div class="adm_int">
				<label class="label_txt">Phone No.</label>
				<input class="input_des" type="Number" name="PhoneNo">
			</div>
			<div class="adm_int">
				<input class="btn btn-primary" id="submit" type="submit" value="REGISTER" name="REGISTER">
			</div>
		</form>
		</div>
	</center>

	<footer>
		<h4 class="foot_txt">All @Copyright reserved by Fit Freaks</h4>
	</footer>
</body>
</html>