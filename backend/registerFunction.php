<?php
    include 'dbconnection.php';
    session_start();
    
    if(registerAdmin(isset($_POST['Submit'])) > 0){
        $_SESSION["sukses"] = "Berhasil melakukan login";
        header('Location: ../login.php');
    }else {
        $_SESSION["gagal"] = "Gagal melakukan register";
        header('Location: ../register.php');
    }

    exit();
?>