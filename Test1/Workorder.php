<!DOCTYPE HTML>
<html>
	<head>
		<title>Work Order</title>
		<meta name="viewpoint" content="width=device-width" , initial-scale=1 , shrink-to-fit=no , charset="utf-8" >
		<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>

	<body >
		<header>
			<nav class="nav">
				<ul>
					<li>
						<a href="profile.php">
							Profile
						</a>
					</li>
					<li>
						<a href="workOrder.php">
							Work Order
						</a>
					</li>
					<li>
						<a href="inventory.php">
							Inventory
						</a>
					</li>
					<li>
						<a href="customer.php">
							Customer
						</a>
					</li>
					<li>
						<a href="staff.php">	
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
				Work Order
			</div>
		</section>

		<section class="container">
			<a href="function/tambah_item.php">
				<button class="btn">
					Tambah Item
				</button>
			</a>

			<table class="table">	
				<thead>
					<tr>
						<th>No</th>
						<th>WOID</th>
						<th>Vehicle ID</th>
						<th>WO Date & Time</th>
						<th>Desctiption</th>
						<th>Control</th>
					</tr>
				</thead>

				<tbody>
					<?php
						include "function/DBconnect.php";

						$sql = mysqli_query($con, "SELECT * FROM work_order");
						$no = 0;
						while ($row = mysqli_fetch_array($sql, MYSQLI_BOTH)) {
							$no++
					?>

					<tr>
						<td><?= $no ?></td>
						<td><?= $row['WOID']; ?></td>
						<td><?= $row['VehicleID']; ?></td>
						<td><?= $row['WODateTime']; ?></td>
						<td><?= $row['OrderDescription']; ?></td>
						<td>
							<a href="function/edit_item.php?lel=<?= $row['ItemID'] ?>">
								<button class="btn">
									Edit
								</button>
							</a>
							<a href="function/del_item.php?lel=<?= $row['ItemID'] ?>">
								<button class="btn">
									Delete
								</button>
							</a>	
						</td>
					</tr>
				</tbody>
			</table>
		</section>

		<?php
			error_reporting(E_ALL ^ E_NOTICE);

			session_start();

			if ($username = $_SESSION['user']) {

			} else{
				header("location:login.php");
			}}
		?>
	</body>

	<?php
		session_start();

		if ($username = $_SESSION['user']) {

		} else {
			header('location:login.php');
		}
	?>
</html>

