<?php

use App\Penduduk as Penduduk;

$id = $_GET['id'];

$pen = new Penduduk();
$rows = $pen->delete($id);

?>

Data berhasil dihapus!

<a href="index.php?hal=pen_tampil">Kembali</a>