<?php 
    session_start();  
    if (!isset($_SESSION["numEmpleado"]))
        header("Location: login-coordinadores.php");//Redireccion con PHP
?>