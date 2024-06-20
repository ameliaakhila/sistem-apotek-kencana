<?php
$koneksi = mysqli_connect("localhost", "root", "", "apotek_kencana");

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}