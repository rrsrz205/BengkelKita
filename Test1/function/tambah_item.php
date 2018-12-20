<!DOCTYPE html>
<html>
	<head>
		<title>Tambah Inventory</title>
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
				Tambah Inventory
			</div>
		</section>

		<section class="loginContainer">
			<form action="" method="post" id="inputitem">
				<div class="contentText">
					Item ID:
				</div>
				<div>
					<input class="formTF"  type="text" name="itemid">
				</div>
				<div class="contentText">
					Item Name:
				</div>
				<div>
					<input class="formTF" type="text" name="itemname">
				</div>
				<div class="contentText">
					Item Stock:
				</div>
				<div>
					<input class="formTF" type="text" name="itemstock">	
				</div>
				<div class="contentText">
					Item Price:
				</div>
				<div>
					<input class="formTF" type="number" name="itemprice">
				</div>
				<div class="contentText">
					Item Description:
				</div>
				<div>
					<input class="formTF" name="itemdescription" form="inputitem" type="text">
				</div>
				<div>
					<button class="but btnSubmit" type="submit" name="sub">
						Tambah
					</button>
				</div>
			</form>
		</section>

		<?php
			if (isset($_POST['sub'])) {
			error_reporting(E_ALL ^ E_NOTICE);
			error_reporting(E_ERROR | E_PARSE);

			include "../function/DBconnect.php";

			$id = $_POST['itemid'];
			$name = $_POST['itemname'];
			$stock = $_POST['itemstock'];
			$price = $_POST['itemprice'];
			$desc = $_POST['itemdescription'];

			$sql = "INSERT INTO ITEM(ItemID,ItemName,ItemStock,ItemPrice,ItemDescription) VALUES ('$id','$name','$stock','$price','$desc')";
			$res = mysqli_query($con, $sql);

			if ($res) {
			echo "Data Berhasil Disimpan !";
			echo "<meta http-equiv = 'refresh' content=' 2 url=../inventory.php' >";

			} else
			echo "Data Tidak Bisa Disimpan ! ";
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