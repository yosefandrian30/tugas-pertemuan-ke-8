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
	<a href="member.php">Kembali</a>
	<br><br>
	<form action="process.php" method="post">
		<label>Id Member</label>
		<br>
		<input type="text" name="id_member">
		<br>
		<label>Nama Member</label>
		<br>
		<input type="text" name="nama_member">
        <br>
		<label>No. Telepon</label>
		<br>
		<input type="text" name="no_tlp">
		<br>
		<label>Alamat</label>
		<br>
		<input type="text" name="alamat">
        <br><br>
		<button type="submit" name="submit_simpan_member">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html>