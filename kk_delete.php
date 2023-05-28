<?php

use App\KartuKeluarga as KartuKeluarga;

$id = $_GET['id'];

$kk = new KartuKeluarga();
$rows = $kk->delete($id);

?>

Data berhasil dihapus!

<a href="index.php?hal=kk_tampil">Kembali</a>