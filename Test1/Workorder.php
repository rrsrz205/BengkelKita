<!DOCTYPE HTML>
<HTML>
	<head>
		<meta name="viewpoint" content="width=device-width" , initial-scale=1 , shrink-to-fit=no , charset="utf-8" >
		<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style1.css">
		<title>Login</title>
	</head>
	<body >

	<div class="isi">
		<div Class="Header">
				
			
				<h1>Work Order</h1>
						<!--<span>Create Work Order </span>-->

						<nav class="navbar navbar-inverse">
							<div class="container-fluid">
								<div class="navbar-header">
									<a class="navbar-brand" href="Customer.php">Work Order</a>
								</div>
									<ul class="nav navbar-nav">
										<li><a href="MainForm.php">Home</a></li>
										<li><a  href="invetory.php">Inventory</a></li>
										<li class="active"><a  href="workorder.php">Work Order</a></li>
										<li><a  href="staff.php">Staff</a></li>
										<li><a  href="Customer.php">Customer</a></li>
									</ul>
									<ul class="nav navbar-nav navbar-right">
										<li><a href="function/clear.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
								</ul>
							</div>
						</nav>

						<div id="MainWO">


							
						</div>

			</div>
		</div>	
	</body>

	<?php

session_start();

if ($username = $_SESSION['user']) {

} else {
	header('location:login.php');
}




?>



</HTML>

