<!doctype html>
<head>
	<title></title>
</head>
<body>
	<?php
	$email = $_POST['email'];
	$password = $_POST['password'];
	$koneksi = mysqli_connect("localhost","root","","mahasiswa");
	$query = "SELECT * from data where email = '$email' and password = $password ";
	$hasil = mysqli_query($koneksi,$query);
	// var_dump($email,$password);
	header(ajenggusti.php);

	?>
</body>