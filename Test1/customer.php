<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Inventory</title>
</head>
<body>

	<div Class="isi">
		
	
		<div Class="Header">
			
		
			<h1>Customer</h1>
					<!--<span>List Customer </span>-->

					<nav class="navbar navbar-inverse">
				  		<div class="container-fluid">
					   		 <div class="navbar-header">
					     		 <a class="navbar-brand" href="Customer.php">Customer</a>
					   		 </div>
							    <ul class="nav navbar-nav">
								      <li><a href="MainForm.php">Home</a></li>
								      <li><a  href="invetory.php">Inventory</a></li>
								      <li><a  href="workorder.php">Work Order</a></li>
								      <li><a  href="staff.php">Staff</a></li>
								      <li class="active"><a  href="Customer.php">Customer</a></li>
							    </ul>
							    <ul class="nav navbar-nav navbar-right">
      								  <li><a href="function/clear.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
   							 </ul>
						  </div>
					</nav>

					<div id="MainCustomer">


						
					</div>

		</div>

		</div>
		<?php
	error_reporting(E_ALL ^ E_NOTICE);

	session_start();

	if ($username = $_SESSION['user']) {

	} else
		header("location:login.php");




	?>

</body>
</html>