<?php

use App\KartuKeluarga as KartuKeluarga;

$kk = new KartuKeluarga();

if (isset($_POST['btn_simpan'])) {
    $kk->simpan();
    header("location:index.php?hal=kk_tampil");
}

if (isset($_POST['btn_update'])) {
    $kk->update();
    header("location:index.php?hal=kk_tampil");
}