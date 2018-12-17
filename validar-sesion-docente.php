<?php 
    session_start();  
    if (!isset($_SESSION["numEmpleado"]))
        header("Location: login-docentes.php");//Redireccion con PHP
?>