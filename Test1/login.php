<!DOCTYPE HTML>
<HTML>

<head>
<title>Login</title>
	<meta name="viewpoint" content="width=device-width" , initial-scale=1 , shrink-to-fit=no , charset="utf-8">	
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
	
</head>

<body>

	<div class="Main">

		<center>
			<h1>BengkelKita</h1>
			<div class="loginContainer">
				<br>
				<div>
					<form method="POST" action="">

						<input name="Email" class="textFieldCustom" placeholder="Email"> <br>
						<input type="password" class="textFieldCustom" name="pass" placeholder="Password"> <br><br>
						<input type="submit" name="sub" id="buttonLoginCustom" value="Login">
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
				header("location:Mainform.php ");
				die();
				session_close();
			} else {
				echo "<p class=login_text>Salah Id / Password (Case Sensivite)</p>";
			}
		}


		?>


		</center>

	</div>

</body>

<?php

	session_start();
	error_reporting(E_ALL ^ E_NOTICE);
	if ($username = $_SESSION['user']) {
		header('location:function/warn.php');
	} else {

	}


?>



</HTML>