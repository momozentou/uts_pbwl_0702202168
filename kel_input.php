<?php

use App\KartuKeluarga as KartuKeluarga;
use App\Penduduk as Penduduk;

$kk = new KartuKeluarga;
$dataKK = $kk->tampil();

$pen = new Penduduk;
$dataPenduduk = $pen->tampil();
?>

<h2>Tambah Keluarga</h2>

<form action="index.php?hal=kel_proses" method="post">
    <table>
        <tr>
            <td>NIK KK</td>
            <td>
                <select name="kel_id_kk" id="">
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
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?hal=kel_tampil"><button>Kembali</button></a>