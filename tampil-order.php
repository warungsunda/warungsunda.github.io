<?php include "header.php" ?>
<html>
<head>
<title>HITUNG HASIL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<br><br><br><br>
<h1>Restoran Sunda</h1>
<div class="kotak_login">
<p class="tulisan_login">ORDERAN ANDA</p>

<?php
if (isset($_POST['pesanan1'])) echo $_POST['pesanan1']."<br/>";
if (isset($_POST['pesanan2'])) echo $_POST['pesanan2']."<br/>";
if (isset($_POST['pesanan3'])) echo $_POST['pesanan3']."<br/>";
if (isset($_POST['pesanan4'])) echo $_POST['pesanan4']."<br/>";
if (isset($_POST['pesanan5'])) echo $_POST['pesanan5']."<br/>";
if (isset($_POST['pesanan6'])) echo $_POST['pesanan6']."<br/>";
if (isset($_POST['pesanan7'])) echo $_POST['pesanan7']."<br/>";
?>

</div>
</body>
</html>