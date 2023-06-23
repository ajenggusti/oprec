<!doctype html>
<head>
	<title>tampil semua data</title>
</head>
<body>
	<?php
	$koneksi= mysqli_connect("localhost", "root","","mahasiswa");
	$query = "SELECT * FROM data";
	$hasil = mysqli_query($koneksi, $query);
	if(!$hasil){
		echo "koneksi ggl";
	}
	?>
	<h1>Data Mahasiswa</h1>
	<table border="1">
		<tr>
			<td>id</td>
			<td>email</td>
			<td>nim</td>
			<td>nama</td>
			<td>alamat</td>
			<td>jenis kelamin</td>
			<td>tgl lahir</td>
		</tr>
		<?php while($row = mysqli_fetch_assoc($hasil))
		{
			?>

		<tr>
			<td><?= $row['id']?></td>
			<td><?= $row['email']?></td>
			<td><?= $row['nim']?></td>
			<td><?= $row['nama']?></td>
			<td><?= $row['alamat']?></td>
			<td><?= $row['jenis_kelamin']?></td>
			<td><?= $row['tgl_lahir']?></td>
		</tr>
	<?php }?>
	</table>

</body>