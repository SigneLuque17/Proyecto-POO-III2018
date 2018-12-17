<?php 
    session_start();  
    if (!isset($_SESSION["numEmpleado"]))
        header("Location: inicio.php");//Redireccion con PHP
?>