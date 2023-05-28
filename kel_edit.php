<?php

use App\KartuKeluarga as KartuKeluarga;
use App\Penduduk as Penduduk;
use App\Keluarga as Keluarga;

$kk = new KartuKeluarga;
$dataKK = $kk->tampil();

$pen = new Penduduk;
$dataPenduduk = $pen->tampil();

$kel = new Keluarga;
$dataKeluarga = $kel->edit($_GET['id']);
?>

<h2>Tambah Keluarga</h2>

<form action="index.php?hal=kel_proses" method="post">
    <input type="hidden" name="kel_id" value="<?= $dataKeluarga['kel_id'] ?>">
    <table>
        <tr>
            <td>NIK KK</td>
            <td>
                <select name="kel_id_kk" id="">
                    <option value="<?= $dataKeluarga['kk_id'] ?>"><?= $dataKeluarga['kk_nonik'] ?></option>
                    <?php
                    foreach($dataKK as $row){
                    ?>
                    <option value="<?= $row['kk_id'] ?>"><?= $row['kk_nonik'] ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Anggota Keluarga</td>
            <td>
                <select name="kel_id_penduduk" id="">
                    <option value="<?= $dataKeluarga['pen_id'] ?>"><?= $dataKeluarga['pen_nama'] ?></option>
                    <?php
                    foreach($dataPenduduk as $row){
                    ?>
                    <option value="<?= $row['pen_id'] ?>"><?= $row['pen_nama'] ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
     
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="SIMPAN"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?hal=kel_tampil"><button>Kembali</button></a>