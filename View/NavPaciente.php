<?php
include '../ChamarBoostrap.php';
?>

<!DOCTYPE html>
<html>
<head>


 <?php

 ?>


  <title>Área Paciente</title>
</head>
<body>
<nav class="navbar  navbar-expand-lg navbar-dark bg-primary" style="border-bottom: 1px solid black">
  <div class="container-fluid">
	    <a class="navbar-brand" aria-current="page" href="ListarPaciente.php">Home</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse " id="navbarNav">
	      <ul class="navbar-nav">
          <li class="nav-item">
	          <a class="nav-link active" href="#paciente">Escolha um Horário</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="#calendario">Pré-cadastro</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link active" href="#agenda">Confirmação</a>
	        </li>
			<li class="nav-item">
	          <a class="nav-link active" href="#noti">Sucesso</a>
	        </li>




     	 </ul>
		  <ul class="navbar-nav ml-auto">

		  <li class="nav-item ml-auto">
				<button class="btn btn-outline-secondary navbar-brand">Olá! Sr (Nome Paciente) </button>
		  </li>
		  </ul>

	    </div>
  </div>
</nav>


</body>
</html>
