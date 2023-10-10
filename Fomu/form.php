<?php
    $nombre= $_POST["txtnombre"]; // usamos un arreglo para almacenar  http://127.0.0.1/Fomu/form.php
    $edad= $_POST["txtedad"]; // usamos un arreglo para almacenar  
    $correo= $_POST["txtcorreo"]; // usamos un arreglo para almacenar 
    $passwd= $_POST["txtpassword"]; // usamos un arreglo para almacenar 

    echo "<p>Su Nombre es: " . $nombre."</p> ";
    echo "<p>Su Edad es: " . $edad."</p> ";
    echo "<p>Su Correo es: " . $correo."</p> ";
    echo "<p>Su Password es: " . $passwd."</p> ";
    echo "<a href='index.php'>Al incio</a>";   
include "footeer.php";
?>