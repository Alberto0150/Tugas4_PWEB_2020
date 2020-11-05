<?php

    $dbadmin = mysqli_connect("localhost", "root", "", "admin");
    
    if( !$dbadmin ){
        die("Gagal terhubung dengan database: " . mysqli_connect_error());
    }
?>