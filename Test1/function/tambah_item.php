<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../styles.css">
		<title>Inventory</title>
	</head>
	<body>
	<div id="Mainitem">

	<form action="" method="post" id="inputitem">

	Item ID:</br> <input  type="text" name="itemid" style="width: 200px"></br>
	Item Name:</br> <input  type="text" name="itemname" style="width: 200px"></br>
	Item Stock:</br>  <input  type="text" name="itemstock" style="width: 200px"></br>
	Item Price:</br>  <input  type="number" name="itemprice" style="width: 200px"></br>
	Item Description:</br> <textarea name="itemdescription" form="inputitem" style="width: 200px"></textarea></br>
	<input type="submit" name="sub" value="Submit" id="buttonLoginCustom" style="margin-top: 5px;">

	</form>

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
	echo "Data Berhasil di simpan !";
	echo "<meta http-equiv = 'refresh' content=' 2 url=../invetory.php' >";

	} else
	echo "Data Tidak bisa di Simpan ! ";




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