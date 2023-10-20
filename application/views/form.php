<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

</head>

<body>
	<!-- <?= validation_errors() ?> -->
	<form action="<?= base_url("form/save") ?>" method="post">
		<label for="nama">Nama</label> <br>
		<input type="text" name="nama" id="nama"> <br>
		<?= form_error('nama') ?>
		<label for="alamat">Alamat</label> <br>
		<input type="text" name="alamat" id="alamat"> <br>
		<?= form_error('alamat') ?>
		<label for="notelp">Nomor Telepon</label> <br>
		<input type="text" name="notelp" id="notelp"> <br>
		<?= form_error('notelp') ?>
		<button type="submit">Simpan</button>
	</form>
</body>

</html>