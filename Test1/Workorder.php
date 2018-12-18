<!DOCTYPE HTML>
<html>
	<head>
		<title>Work Order</title>
		<meta name="viewpoint" content="width=device-width" , initial-scale=1 , shrink-to-fit=no , charset="utf-8" >
		<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>

	<body >
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
				Work Order
			</div>
		</section>
	</body>

	<?php
		session_start();

		if ($username = $_SESSION['user']) {

		} else {
			header('location:login.php');
		}
	?>
</html>

