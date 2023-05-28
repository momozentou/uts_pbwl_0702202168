<h2>Tambah Penduduk</h2>

<form action="index.php?hal=pen_proses" method="post">
    <table>
        <tr>
            <td>NIK</td>
            <td><input type="text" name="pen_nik" autofocus required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="pen_nama" required></td>
        </tr>
        <tr>
            <td>AGAMA</td>
            <td><select name="pen_agama" id="">
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
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select></td>
        </tr>
        <tr>
            <td>PEKERJAAN</td>
            <td><input type="text" name="pen_pekerjaan" required></td>
        </tr>
        <tr>
            <td>STATUS PERKAWINAN</td>
            <td><select name="pen_kawin" id="">
                <option value="Sudah">Sudah</option>
                <option value="Belum">Belum</option>
            </select></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>
<br>
<a href="index.php?hal=pen_tampil"><button>Kembali</button></a>