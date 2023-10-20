<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>

</head>

<?php $baseurl = base_url('Form'); ?>

<body>
    <a href="<?= $baseurl ?>">Kembali</a>
    <h1>Output Sistem </h1>

    <?= $nama ?> <br>
    <?= $alamat ?> <br>
    <?= $notelp ?> <br>
</body>

</html>