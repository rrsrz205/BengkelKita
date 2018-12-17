<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<title>Inventory</title>
</head>
<body>

	<div Class="isi">
		
	
		<div Class="Header">
			
		
			<h1>INVENTORY DATA</h1>
					<!--<span>List Inventory</span>-->

					<nav class="navbar navbar-inverse">
				  		<div class="container-fluid">
					   		 <div class="navbar-header">
					     		 <a class="navbar-brand" href="../invetory.php">Inventory</a>
					   		 </div>
							    <ul class="nav navbar-nav">
								      <li><a href="../MainForm.php">Home</a></li>
								      <li class="active"><a  href="../invetory.php">Inventory</a></li>
								      <li><a  href="../workorder.php">Work Order</a></li>
								      <li><a  href="../staff.php">Staff</a></li>
								      <li><a  href="../Customer.php">Customer</a></li>
							    </ul>
							    <ul class="nav navbar-nav navbar-right">
      								  <li><a href="../function/clear.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
   							 </ul>
						  </div>
					</nav>

					<div id="Maininvetory">

						<?php 
					error_reporting(E_ALL ^ E_NOTICE);
					error_reporting(E_ERROR | E_PARSE);

					$idin = $_GET[lel];
					include "../function/DBConnect.php";

					$sql = "SELECT ItemID,ItemName,ItemStock,ItemPrice,ItemDescription FROM item where ItemID = '$idin'";
					$res = mysqli_query($con, $sql);;
					$row = mysqli_fetch_assoc($res);


					?>

						<form action="" method="post" id="edititem">


							
							ItemID: <input  type="text" name="itemid" readonly value="<?= $row['ItemID']; ?>"></br>
							ItemName: <input  type="text" name="itemname" value="<?= $row['ItemName']; ?>" ></br>
							ItemStock: <input  type="text" name="itemstock" value="<?= $row['ItemStock']; ?>" ></br>
							ItemPrice: <input  type="number" name="itemprice" value="<?= $row['ItemPrice']; ?>" ></br>
		ItemDescription : <Input type="text"  name="itemdescription"  value="<?= $row['ItemDescription']; ?>"></br>
							<input type="submit" name="subedit" value="Submit">
							<input type="submit" name="back"  value="back">

						</form>

						<?php

					if (isset($_POST['subedit'])) {

						$id = $_POST['itemid'];
						$name = $_POST['itemname'];
						$stock = $_POST['itemstock'];
						$price = $_POST['itemprice'];
						$desc = $_POST['itemdescription'];

						$sql = "UPDATE ITEM SET ItemName='$name',ItemStock='$stock',ItemPrice = '$price',ItemDescription= '$desc' where  ItemID='$id' ";
						$res = mysqli_query($con, $sql);

						if ($res) {
							echo "Data Berhasil di Update !";
							echo "<meta http-equiv = 'refresh' content='2 url=../invetory.php' >";

						} else
							echo "Data Tidak bisa di Simpan ! ";


					}
					if (isset($_POST['back'])) {
						Header("location:../invetory.php");
					}


					?>

						
					</div>

		</div>

		</div>
		<?php
	error_reporting(E_ALL ^ E_NOTICE);

	session_start();

	if ($username = $_SESSION['user']) {

	} else
		header("location:../login.php");


	?>

</body>
</html>











































































 