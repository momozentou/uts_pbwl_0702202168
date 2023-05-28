<?php

use App\KartuKeluarga as KartuKeluarga;
use App\Penduduk as Penduduk;

$kk = new KartuKeluarga;
$dataKK = $kk->edit($_GET['id']);

$pen = new Penduduk;
$dataPenduduk = $pen->tampil();
?>

<h2>Tambah Penduduk</h2>

<form action="index.php?hal=kk_proses" method="post">
    <input type="hidden" name="kk_id" value="<?= $dataKK['kk_id'] ?>">
    <table>
        <tr>
            <td>Kepala Keluarga</td>
            <td>
                <select name="kk_id_kepala" id="">
                    <option value="<?= $dataKK['pen_id'] ?>"><?= $dataKK['pen_nama'] ?></option>
                    <?php foreach ($dataPenduduk as $row) { ?>
                    <option value="<?= $row['pen_id'] ?>"><?= $row['pen_nama'] ?></option>
                    <?php }?>
                </select>
            </td>
        </tr>
        <tr>
            <td>No NIK</td>
            <td><input type="text" name="kk_nonik" value="<?= $dataKK['kk_nonik'] ?>" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="kk_alamat" id="" cols="30" rows="10"><?= $dataKK['kk_alamat'] ?></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="SIMPAN"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?hal=kk_tampil"><button>Kembali</button></a>