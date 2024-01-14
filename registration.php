<?php

session_start();
	if(!isset($_SESSION['username']))
	{
		header("location:login.php");
	}
	elseif($_SESSION['User']=="student")
	{
		header("location:login.php");
	}


	$host="localhost";
	$user="root";
	$password="";
	$db="students";

	$data=mysqli_connect($host,$user,$password,$db);
	$sql="SELECT * FROM register";
	$result=mysqli_query($data,$sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Page</title>
	<?php
		include 'admin_css.php';
	?>
</head>
<body>

	<?php
		include 'admin_sidebar.php';
	?>

	<div class="content">
		<center>
		<h1>Registered Users</h1>
		<br><br>
		<table border="2px">
			<tr>
				<th style="padding: 20px; font-size: 15px;">TUF ID</th>
				<th style="padding: 20px; font-size: 15px;">Full Name</th>
				<th style="padding: 20px; font-size: 15px;">College Email</th>
				<th style="padding: 20px; font-size: 15px;">Phone No</th>
			</tr>

			<?php
				while ($info=$result->fetch_assoc()) 
				{
			?>
			<tr>
				<td style="padding: 20px;">
					<?php echo "{$info['id']}"; ?>
				</td>
				<td style="padding: 20px;">
					<?php echo "{$info['name']}"; ?>
				</td>
				<td style="padding: 20px;">
					<?php echo "{$info['email']}"; ?>
				</td>
				<td style="padding: 20px;">
					<?php echo "{$info['phoneno']}"; ?>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
		</center>
	</div>
</body>
</html>