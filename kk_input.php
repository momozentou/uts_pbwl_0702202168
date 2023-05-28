<?php

use App\Penduduk as Penduduk;

$pen = new Penduduk;
$data = $pen->tampil();
?>

<h2>Tambah Kartu Keluarga</h2>

<form action="index.php?hal=kk_proses" method="post">
    <table>
        <tr>
            <td>Kepala Keluarga</td>
            <td>
                <select name="kk_id_kepala" id="">
                    <?php foreach ($data as $row) { ?>
                    <option value="<?= $row['pen_id'] ?>"><?= $row['pen_nama'] ?></option>
                    <?php }?>
                </select>
            </td>
        </tr>
        <tr>
            <td>No NIK KK</td>
            <td><input type="text" name="kk_nonik" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="kk_alamat" id="" cols="30" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?hal=kk_tampil"><button>Kembali</button></a>