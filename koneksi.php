<?php 
// Menghubungkan dengan database
$koneksi=mysqli_connect("localhost","root","","db_login");
if(mysqli_connect_errno()){
    echo "koneksi gagal" . mysqli_connect_error();
};