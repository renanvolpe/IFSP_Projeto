<?php
//Página incial
include '../ConexaoBanco.php';


?>

<!DOCTYPE html>
<html>
<head>


 <?php
	include '../ChamarBoostrap.php';
 ?>


  <title>Clinica médica</title>
</head>
<body>
<nav class="navbar  navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
	    <a class="navbar-brand" href="#Home">Home</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNav">
	      <ul class="navbar-nav">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="#apresentacao">Apresentacao</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#sintomas">Sintomas</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#especialidades">Especialidades</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#contatos">Contato</a>
	        </li>
       
     	 </ul>
	    </div>
  </div>
</nav>


</body>
</html>