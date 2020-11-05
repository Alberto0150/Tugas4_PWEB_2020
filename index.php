<?php session_start();
    if(session_is_registered('nama_admin'))
    {
        ?>
            Selamat datang admin!
        <?php
    } else {
        ?> Anda tidak dapat mengakses halaman ini. silahkan kembali ke <a href="admin.php"> Login dahulu </a> <?php
    } 
?> 
   
