<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$level = $_POST['level'];

mysqli_query($koneksi, "INSERT INTO t_login VALUES('','$username','$password','$level')");

header('location:tampildata.php');