<?php

use App\Keluarga as Keluarga;

$id = $_GET['id'];

$kk = new Keluarga();
$rows = $kk->delete($id);

?>

Data berhasil dihapus!

<a href="index.php?hal=kel_tampil">Kembali</a>