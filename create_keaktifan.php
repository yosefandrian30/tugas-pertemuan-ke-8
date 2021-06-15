<!doctype html>
<html lang="en">
<head>
	<title>Tambah Member Gym</title>
</head>

<body>
<?php
  include 'navbar.php';
  ?>
	<h1>Tambah Member Gym</h1>
	<a href="keaktifan.php">Kembali</a>
	<br><br>
	<form action="process.php" method="post">
		<label>ID Aktif</label>
		<br>
		<input type="text" name="id_aktif">
		<br>
		<label>Nama Member</label>
		<br>
		<input type="text" name="nama_member">
        <br>
		<label>Tanggal Masuk/label>
		<br>
		<input type="date" name="tgl_masuk">
		<br>
		<label>Tanggal Keluar</label>
		<br>
		<input type="date" name="tgl_keluar">
		<br>
		<label>Masa Aktif</label>
		<br>
		<input type="text" name="masa_aktif">
        <br><br>
		<button type="submit" name="submit_simpan_keaktifan">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html>