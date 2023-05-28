<?php

use App\Penduduk as Penduduk;

$pen = new Penduduk;
$rows = $pen->tampil();

?>

<h2>Data Penduduk</h2>

<a href="index.php?hal=pen_input">Tambah Penduduk</a>
<table border="1">
    <tr>
        <td>No</td>
        <td>NIK</td>
        <td>Nama</td>
        <td>Agama</td>
        <td>Kelamin</td>
        <td>Pekerjaan</td>
        <td>Status</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?php 
    $no = 1;
    foreach ($rows as $row) { 
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $row['pen_nik']; ?></td>
        <td><?php echo $row['pen_nama']; ?></td>
        <td><?php echo $row['pen_agama']; ?></td>
        <td><?php echo $row['pen_kelamin']; ?></td>
        <td><?php echo $row['pen_pekerjaan']; ?></td>
        <td><?php echo $row['pen_kawin']; ?></td>
        <td><a href="index.php?hal=pen_edit&id=<?php echo $row['pen_id']; ?>">Edit</a></td>
        <td><a href="index.php?hal=pen_delete&id=<?php echo $row['pen_id']; ?>">Delete</a></td>
    </tr>
    <?php
        $no++; 
    } 
    ?>
</table>
