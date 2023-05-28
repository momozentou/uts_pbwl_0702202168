<?php

use App\Penduduk as Penduduk;

$pen = new Penduduk;
$data = $pen->edit($_GET['id']);
?>

<h2>Tambah Penduduk</h2>

<form action="index.php?hal=pen_proses" method="post">
    <input type="hidden" name="pen_id" value="<?= $data['pen_id'] ?>">
    <table>
        <tr>
            <td>NIK</td>
            <td><input type="text" name="pen_nik" value="<?= $data['pen_nik'] ?>" autofocus required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="pen_nama" value="<?= $data['pen_nama'] ?>" required></td>
        </tr>
        <tr>
            <td>AGAMA</td>
            <td><select name="pen_agama" id="">
                <option value="<?= $data['pen_agama'] ?>"><?= $data['pen_agama'] ?></option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Buddha">Buddha</option>
                <option value="Hindu">Hindu</option>
                <option value="Konghucu">Konghucu</option>
            </select></td>
        </tr>
        <tr>
            <td>JENIS KELAMIN</td>
            <td><select name="pen_kelamin" id="">
                <option value="<?= $data['pen_kelamin'] ?>"><?= $data['pen_kelamin'] ?></option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select></td>
        </tr>
        <tr>
            <td>PEKERJAAN</td>
            <td><input type="text" name="pen_pekerjaan" value="<?= $data['pen_pekerjaan'] ?>" required></td>
        </tr>
        <tr>
            <td>STATUS PERKAWINAN</td>
            <td><select name="pen_kawin" id="">
                <option value="<?= $data['pen_kawin'] ?>"><?= $data['pen_kawin'] ?></option>
                <option value="Sudah">Sudah</option>
                <option value="Belum">Belum</option>
            </select></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="SIMPAN"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?hal=pen_tampil"><button>Kembali</button></a>