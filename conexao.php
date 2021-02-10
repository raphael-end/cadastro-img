<?php

//Credenciais de acesso ao BD
define('HOST', 'localhost');
define('USER', 'dgnacom1_teste2');
define('PASS', 'ander_1305');
define('DBNAME', 'dgnacom1_teste');

$conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);
?>