<?php

define('HOST', 'localhost');
define('USER', 'root');
//define('PASS', '');//ESSE AQUI E PARA GERAL FUNCINAR
//define('PASS', 'root');////ESSE AQUI E PARA ISSO É PARA FUNCIONAR NO PC DO ALEX
define('PASS', '');//ISSO É PARA FUNCIONAR NO PC DO MARCO
define('DBNAME', 'clinicamedica');
define('PORT', 3306);

$conn = new PDO('mysql:host=' . HOST . ';port='.PORT.';dbname=' . DBNAME . ';', USER, PASS);
