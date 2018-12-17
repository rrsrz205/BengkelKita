<!DOCTYPE HTML>
<html>

<head>
	<meta name="viewpoint" content="width=device-width" , initial-scale=1 , shrink-to-fit=no , charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<title>Home Bengkel Kita</title>
</head>


<body>
	<div class="isi">

		<div class="Header">



			<h1>Bengkel Kita</h1>
			<!--<span>Profile of </span>
			
			<?php 
		session_start();
		$username = $_SESSION['user'];
		echo "$username";
		?>-->


			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="Mainform.php">Bengkel Kita</a>
					</div>
					<ul class="nav navbar-nav">
						<li class="active"><a href="MainForm.php">Home</a></li>
						<li><a href="invetory.php">Inventory</a></li>
						<li><a href="workorder.php">Work Order</a></li>
						<li><a href="staff.php">Staff</a></li>
						<li><a href="Customer.php">Customer</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="function/clear.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
					</ul>
				</div>
			</nav>

		</div>

		<div class="isiMainForm">
			<form id="FormMain" action="" method="get">
					<center>
					<div>
						<img src="img/pic_profile.png" alt="Cinque Terre" class="img-circle" style="margin-bottom: -20%;">
					</div>
					
					<div>
						<h1>
							<?php 
						$username = $_SESSION['user'];
						echo "$username";
						?>
						</h1>
					</div>
					</center>
						
					<hr style="border-color: black;">

					<p><b>Personal Information</b></p>

					<?php

				include "function/DBconnect.php";

				$username = $_SESSION['user'];

				$sql = "SELECT StaffPNumber,StaffEmail,StaffDOB From Staff where StaffName = '$username' ";
				$res = mysqli_query($con, $sql);
				$row = mysqli_fetch_assoc($res);

				$phone = $row["StaffPNumber"];
				$email = $row["StaffEmail"];
				$lahir = $row["StaffDOB"];

				echo "Phone Number: ", $phone;
				echo "</br>Email: ", $email;
				echo "</br>DOB: ", $lahir;
				?>
			</form>

		</div>

	</div>

	<!-- log Buat LoopBack bila tidak ada id -->
	<?php
error_reporting(E_ALL ^ E_NOTICE);

session_start();

if ($username = $_SESSION['user']) {

} else
	header("location:login.php");



?>
</body>

</html>