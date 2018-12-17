<h1>
<center>
<?php

session_start();

$username = $_SESSION['user'];

echo "Anda Telah Login ", $username;
echo "<meta http-equiv = 'refresh' content='2 url=../MainForm.php'>";





?>
</center>
</h1>