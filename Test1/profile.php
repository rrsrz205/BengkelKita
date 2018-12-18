<!DOCTYPE HTML>
<html>
	<head>
		<?php session_start(); ?>
		<title>Profile</title>
		<meta name="viewpoint" content="width=device-width" , initial-scale=1 , shrink-to-fit=no , charset="utf-8">
		<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>

	<body>
		<header>
			<nav class="nav">
				<ul>
					<li>
						<a href="profile.php">
							Profile
						</a>
					</li>
					<li>
						<a href="workOrder.php">
							Work Order
						</a>
					</li>
					<li>
						<a href="inventory.php">
							Inventory
						</a>
					</li>
					<li>
						<a href="customer.php">
							Customer
						</a>
					</li>
					<li>
						<a href="staff.php">	
							Staff
						</a>
					</li>
					<li>
						<a href="function/clear.php">
							<span class="glyphicon glyphicon-log-in" style="color: white">
							</span>
							Logout
						</a>
					</li>
				</ul>
			</nav>
		</header>
		<section class="container">
			<div class="pageTitle">
				Profile
			</div>
			<form action="" method="get">
				<img src="img/pic_profile.png" alt="This is your profile picture." class="profPic">
				<div class="profName">
					<?php 
						$username = $_SESSION['user'];
						echo "$username";
					?>
				</div>
				<div style="font-size: 2em">
					<b>Personal Information</b>
				</div>
				<div style="font-size: 1em">
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
				</div>
			</form>
		</section>
		
		<!-- log Buat LoopBack bila tidak ada id -->
		<?php
			error_reporting(E_ALL ^ E_NOTICE);

			session_start();

			if ($username = $_SESSION['user']) {

			} else header("location:login.php");
		?>
	</body>
</html>