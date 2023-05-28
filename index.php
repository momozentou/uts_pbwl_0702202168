<?php

require_once "inc/Koneksi.php";
require_once "vendor/autoload.php";




?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>SENSUS PENDUDUK BINJAI - RAMBUNG DALAM</title>
      <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>

<body>

      <div class="container">
            <header>
                  <img src="layouts/assets/img/headerwawan.jpg" alt="" height="350px" >
            </header>

            <nav>
                  <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php?hal=pen_tampil">Penduduk</a></li>
                        <li><a href="index.php?hal=kk_tampil">Kartu Keluarga</a></li>
                        <li><a href="index.php?hal=kel_tampil">Keluarga</a></li>

                  </ul>
            </nav>

            <main>
                  <section>
                        <?php 
                        if (isset($_GET['hal'])) {
                              require $_GET['hal'] . ".php";
                        } else {
                              require 'main.php';
                        }
                        ?>
                  </section>
            </main>

            <footer>
                  Copyright &copy; 2023. Designed by Muhammad Irawan Pratama
            </footer>
      </div>

</body>

</html>