<!DOCTYPE html>
<html>
	<head>
		<title>Edit Inventory</title>
		<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../styles.css">
		
	</head>

	<body>
		<header>
			<nav class="nav">
				<ul>
					<li>
						<a href="../profile.php">
							Profile
						</a>
					</li>
					<li>
						<a href="../workOrder.php">
							Work Order
						</a>
					</li>
					<li>
						<a href="../inventory.php">
							Inventory
						</a>
					</li>
					<li>
						<a href="../customer.php">
							Customer
						</a>
					</li>
					<li>
						<a href="../staff.php">	
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
				Edit Inventory
			</div>
		</section>

		<?php 
			error_reporting(E_ALL ^ E_NOTICE);
			error_reporting(E_ERROR | E_PARSE);

			$idin = $_GET[lel];
			include "../function/DBConnect.php";

			$sql = "SELECT ItemID,ItemName,ItemStock,ItemPrice,ItemDescription FROM item where ItemID = '$idin'";
			$res = mysqli_query($con, $sql);;
			$row = mysqli_fetch_assoc($res);
		?>

		<section class="loginContainer">
			<form action="" method="post" id="edititem">
				<div class="contentText">
					Item ID:
				</div>
				<div>
					<input class="formTF" type="text" name="itemid" readonly value="<?= $row['ItemID']; ?>">
				</div>
				<div class="contentText">
					Item Name:
				</div>
				<div>
					<input class="formTF" type="text" name="itemname" value="<?= $row['ItemName']; ?>" >
				</div>
				<div class="contentText">
					Item Stock:
				</div>
				<div>
					<input class="formTF" type="text" name="itemstock" value="<?= $row['ItemStock']; ?>" >	
				</div>
				<div class="contentText">
					Item Price:
				</div>
				<div>
					<input class="formTF" type="number" name="itemprice" value="<?= $row['ItemPrice']; ?>" >
				</div>
				<div class="contentText">
					Item Description:
				</div>
				<div>
					<input class="formTF" type="text"  name="itemdescription" value="<?= $row['ItemDescription']; ?>">
				</div>
				<div>
					<button class="but btnSubmit" type="submit" name="subedit">
						Edit
					</button>
				</div>
				<div style="margin-top: 5px">
					<button class="but btnSubmit" type="submit" name="back">
						Back
					</button>
				</div>
			</form>
		</section>

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
			echo "<meta http-equiv = 'refresh' content='2 url=../inventory.php' >";

			} else
			echo "Data Tidak bisa di Simpan ! ";

			}
			if (isset($_POST['back'])) {
			Header("location:../inventory.php");
			}
		?>

		<?php
			error_reporting(E_ALL ^ E_NOTICE);

			session_start();

			if ($username = $_SESSION['user']) {

			} else
			header("location:../login.php");
		?>
	</body>
</html>











































































 