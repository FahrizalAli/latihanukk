<?php 
session_start();
include 'koneksi.php';
// Memanggil variable 
$username=$_POST['username'];
$password=md5($_POST['password']);

// menyeleksi data
$data= mysqli_query($koneksi,"select * from t_login where username='$username' and password='$password'");
$cek= mysqli_num_rows($data);
if($cek >0 ){
    $_SESSION['status'] = "login";
    header('location:tampildata.php');
} else{
    header('location:index.php?pesan=failed');
}
?>