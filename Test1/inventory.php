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
			
		
			<h1>Inventory</h1>

					<nav class="navbar navbar-inverse">
				  		<div class="container-fluid">
					   		 <div class="navbar-header">
					     		 <a class="navbar-brand" href="invetory.php">Inventory</a>
					   		 </div>
							    <ul class="nav navbar-nav">
								      <li><a href="MainForm.php">Home</a></li>
								      <li class="active"><a  href="invetory.php">Inventory</a></li>
								      <li><a  href="workorder.php">Work Order</a></li>
								      <li><a  href="staff.php">Staff</a></li>
								      <li><a  href="Customer.php">Customer</a></li>
							    </ul>
							    <ul class="nav navbar-nav navbar-right">
      								  <li><a href="function/clear.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
   							 </ul>
						  </div>
					</nav>

					<div id="Maininvetory">

						<a href="function/tambah_item.php" >Tambah Item</a>

						<table class="table">
							
							<thead>
								<tr>
									<th>No</th>
									<th>Item ID</th>
									<th>Item Name</th>
									<th>Item Description</th>
									<th>Item Stock</th>
									<th>Item Price</th>
									<th>Control</th>
								</tr>
							</thead>
							<tbody>
								<?php
							include "function/DBconnect.php";

							$sql = mysqli_query($con, "SELECT * FROM item");
							$no = 0;
							while ($row = mysqli_fetch_array($sql, MYSQLI_BOTH)) {
								$no++
								?>
								<tr>
									<td><?= $no ?></td>
									<td><?= $row['ItemID']; ?></td>
									<td><?= $row['ItemName']; ?></td>
									<td><?= $row['ItemDescription']; ?></td>
									<td><?= $row['ItemStock']; ?></td>
									<td><?= $row['ItemPrice']; ?></td>
									<td>
										
										<a class="Btn_edit" href="function/edit_item.php?lel=<?= $row['ItemID'] ?> ">Edit</a> |
										<a class="Btn_del" href="function/del_item.php?lel=<?= $row['ItemID'] ?>">Delete</a>

									</td>
								</tr>

								<?php 
						}
						?>
							</tbody>
						</table>
						


						
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