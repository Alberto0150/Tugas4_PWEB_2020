<?php session_start();
include "koneksi.php";
$nama_admin=$_POST['nama_admin'];
$password=md5($_POST['password']);

$query=mysql_query("SELECT * 
    from data_admin 
    where nama_admin='".$nama_admin."' 
    AND password='.$password.'");

$cek=mysql_num_rows($query);

if($cek){
    $_SESSION['nama_admin']=$nama_admin;
    ?>Anda berhasil login. silahkan menuju menu utama<a href="index.php"> Homepage </a><?php
}
else{
    ?>Anda gagal login. silahkan <a href="admin.php"> Login kembali </a><?php
    echo mysql_error();
}
?>