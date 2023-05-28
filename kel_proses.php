<?php

use App\Keluarga as Keluarga;

$kel = new Keluarga();

if (isset($_POST['btn_simpan'])) {
    $kel->simpan();
    header("location:index.php?hal=kel_tampil");
}

if (isset($_POST['btn_update'])) {
    $kel->update();
    header("location:index.php?hal=kel_tampil");
}