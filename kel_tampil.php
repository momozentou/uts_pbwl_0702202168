<?php

use App\Keluarga as Keluarga;

$pen = new Keluarga;
$rows = $pen->tampil();

?>

<h2>Data Keluarga</h2>

<a href="index.php?hal=kel_input">Tambah Keluarga</a>
<table border="1">
    <tr>
        <td>No</td>
        <td>NIK Kartu Keluarga</td>
        <td>Anggota Keluarga</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?php 
    $no = 1;
    foreach ($rows as $row) { 
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $row['kk_nonik']; ?></td>
        <td><?php echo $row['pen_nama']; ?></td>
        <td><a href="index.php?hal=kel_edit&id=<?php echo $row['kel_id']; ?>">Edit</a></td>
        <td><a href="index.php?hal=kel_delete&id=<?php echo $row['kel_id']; ?>">Delete</a></td>
    </tr>
    <?php
        $no++; 
    } 
    ?>
</table>
