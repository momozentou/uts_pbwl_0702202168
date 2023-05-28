<?php

use App\KartuKeluarga as KartuKeluarga;

$pen = new KartuKeluarga;
$rows = $pen->tampil();

?>

<h2>Data Kartu Keluarga</h2>

<a href="index.php?hal=kk_input">Tambah Kartu Keluarga</a>
<table border="1">
    <tr>
        <td>No</td>
        <td>Kepala Keluarga</td>
        <td>No NIK</td>
        <td>Alamat</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?php 
    $no = 1;
    foreach ($rows as $row) { 
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $row['pen_nama']; ?></td>
        <td><?php echo $row['kk_nonik']; ?></td>
        <td><?php echo $row['kk_alamat']; ?></td>
        <td><a href="index.php?hal=kk_edit&id=<?php echo $row['kk_id']; ?>">Edit</a></td>
        <td><a href="index.php?hal=kk_delete&id=<?php echo $row['kk_id']; ?>">Delete</a></td>
    </tr>
    <?php
        $no++; 
    } 
    ?>
</table>
