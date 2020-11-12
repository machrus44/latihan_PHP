<?php 
require 'functions.php';
$siswa = query ("SELECT * FROM siswa");
?>
<!DOCTYPE html>
<html>
<head> 
	<title>Beranda</title>
</head>
<body>
	<h1>Daftar Siswa</h1>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<td>No. </td>
			<td>Nama </td>
			<td>NIS </td>
			<td>Kelas </td>
		</tr>
		<?php foreach ($siswa as $row) :?>
		<tr>
			<td><?= $row["id"]?></td>
			<td><?= $row["nama"]?></td>
			<td><?= $row["nis"]?></td>
			<td><?= $row["kelas"]?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>