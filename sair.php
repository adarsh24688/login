<?php
    session_start();
    session_destroy();
    error_reporting(0);
    echo "<script>alert('Desconectado do sistema.')</script>";
    echo "<script>window.location.href = 'index.php';</script>";    
?>