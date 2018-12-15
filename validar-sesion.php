<?php 
    session_start();  
    if (!isset($_SESSION["cuenta"]))
        header("Location: login.php");//Redireccion con PHP
?>