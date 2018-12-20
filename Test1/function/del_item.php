<center>
	<?php 
		include "../function/DBconnect.php";
		error_reporting(E_ALL ^ E_NOTICE);
		error_reporting(E_ERROR | E_PARSE);
		$idin = $_GET[lel];

		$sql = "DELETE FROM item WHERE ItemID = '$idin' ";

		$res = mysqli_query($con, $sql);

		if ($res) {
			echo "Data Sudah dihapus !";
			echo "<meta http-equiv='refresh' content= '1 url=../inventory.php' >";
		} else {
			echo "Tidak Dapat dihapus !";
			echo mysqli_error();
		}
	?>

	<?php
		error_reporting(E_ALL ^ E_NOTICE);

		session_start();

		if ($username = $_SESSION['user']) {

		} else
			header("location:../login.php");
	?>
</center>




 