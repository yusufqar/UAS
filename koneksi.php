<?php

$hostName = "localhost";
$DbUsername = "id17255428_db_uas_kelompok5";
$DbPassword = "UASKelompok5_06TPLM001";
$DbName = "id17255428_db_pemroweb2_uas_kelompok_5";

@$connect = mysqli_connect($hostName, $DbUsername, $DbPassword, $DbName) or die ('Koneksi Gagal - Database Tidak Dapat Ditemukan.');

?>