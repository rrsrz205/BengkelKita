<?phpsession_start();?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>BengkelKita Login</title>
		<meta name="viewpoint" content="width=device-width" , initial-scale=1 , shrink-to-fit=no , charset="utf-8">	
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>

	<body>
		<div class="loginContainer">
			<h1 class="loginTitle">BengkelKita</h1>
			<div class="loginBox">
				<form method="POST" action="">
					<div>
						<input name="Email" class="textField loginTF" placeholder="Email">
					</div>
					<div>
						<input type="password" class="textField loginTF" name="pass" placeholder="Password">
					</div>
					<div>
						<input type="submit" name="sub" class="btn btnLogin" value="Login">
					</div>
				</form>
			</div>
		</div>

		<?php
			if (isset($_POST["sub"])) {

				error_reporting(E_ALL ^ E_NOTICE);

				session_start();
				include 'function/DBconnect.php';

				$Username = $_POST['Email'];
				$Password = $_POST['pass'];


				$sql = " SELECT * from staff WHERE StaffEmail = '$Username'  AND STAFFPASSWORD = '$Password' ";
				$res = mysqli_query($con, $sql);
				$row = mysqli_fetch_assoc($res);


				$louser = $row["StaffEmail"];
				$pasuser = $row["StaffPassword"];
				$nama_user =$row['StaffName'];


				if ($Username == "" && $Password == "")
					echo "<p class= login_text ><b>Harus di isi!</b></p>";
				else if ($Username == $louser && $Password == $pasuser) {
					session_start();
					$_SESSION['user'] = $nama_user;
					header("location:profile.php ");
					die();
					session_close();
				} else {
					echo "<p class=login_text>Salah Id / Password (Case Sensivite)</p>";
				}
			}
		?>
	</body>

	<?php
		error_reporting(E_ALL ^ E_NOTICE);
		if ($username = $_SESSION['user']) {
			header('location:function/warn.php');
		} else {

		}
	?>
</html>