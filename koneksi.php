<?php
$koneksi = mysqli_connect("localhost","root","","ukk_kasir_hani");

//cek koneksi
if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>