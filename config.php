<?php

$clinica = 'clinicamedica';
$user = 'root';
$senha = '';
$localhost = 'localhost';  
include_once('include/Database.php');
define('SS_DB_NAME', 'clinicamedica');
define('SS_DB_USER', 'root');
define('SS_DB_PASSWORD', '');//ESSE AQUI E PARA GERAL FUNCINAR
//define('SS_DB_PASSWORD', 'root');//ESSE AQUI E PARA GERAL
//define('SS_DB_PASSWORD', 'simsenha123');//ISSO É PARA FUNCIONAR NO PC DO MARCO
define('SS_DB_HOST', 'localhost');

$dsn	= 	"mysql:dbname=".SS_DB_NAME.";host=".SS_DB_HOST."";
$pdo	=	"";
try {
	

	
	$pdo	=	"";

	$pdo = new PDO($dsn, SS_DB_USER, SS_DB_PASSWORD);
}catch (PDOException $e) {
	try {
	
		$senha = 'root';
		
		
	
		$pdo = new PDO($dsn, SS_DB_USER, $senha);
	}catch (PDOException $e) {
		try {
	
			$senha = 'simsenha123';
			
			
		
			$pdo = new PDO($dsn, SS_DB_USER, $senha);
		}catch (PDOException $e) {
			
			echo "deu rui, tenta de novo";
		}
		
	}
	
}
$db 	=	new Database($pdo);
?>
