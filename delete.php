<?php
include "koneksi.php";
$id=$_GET['id'];
mysqli_query($koneksi,"DELETE FROM
 t_login WHERE id='$id'");
header("location:tampildata.php")
?>