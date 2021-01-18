<?php

include '../ChamarBoostrap.php';
include_once ('../config.php');
?>



 <?php
 /*
	$idLogin = $_SESSION['clinica'];

		$condition = 'AND login_idLogin LIKE "'.$idLogin .'"';
		$userData    =    $db->getAllRecords('pessoa','*',$condition,'');
		if(count($userData)>0){
		  $s    =    '';
		  foreach($userData as $pessoa){
			$s++;
			}

			$NomePaciente = $pessoa['nome'];
		}else{

		}
		*/
 ?> 
<!DOCTYPE html>
<html>
<head>

  <title>Área Paciente</title>
</head>
<body>
<!--
<nav class="navbar  navbar-expand-lg navbar-dark bg-primary" style="border-bottom: 1px solid black">
        <div class="container-fluid">
            <a class="navbar-brand" href="ListarPaciente.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
	      <ul class="navbar-nav">
          <li class="nav-item">
	          <a class="nav-link " href="#paciente">Escolha um Horário</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link " href="#agenda">Confirmação</a>
	        </li>
			<li class="nav-item">
	          <a class="nav-link " href="#noti">Sucesso</a>
	        </li>




     	 </ul>
		  <ul class="navbar-nav ml-auto">

		  <li class="nav-item ml-auto">
				<button class="btn btn-outline-secondary navbar-brand">Olá! Sr <?php// echo $NomePaciente ;?> </button>
		  </li>
		  <li class="nav-item ml-auto">
		  <a class="btn btn-danger navbar-brand" href="../controller/DesfazerLogin.php" > Sair </a>
		  </li>
		  </ul>

	    </div>
  </div>
</nav>-->

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary border rounded p-2 mb-2">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#apresentacao">Apresentação</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sabia">Você Sabia?</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#especialidades">Especialidades</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link disabled" href="#tratamento">Tratamentos</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link disabled" href="#contatos">Contatos</a>
      </li>
    </ul>
	<ul class="navbar-nav ml-auto">

		  <li class="nav-item ml-auto">
				<a href="View/Login.php" class="btn btn-outline-info navbar-brand bg-dark" > SUA CONSULTA AQUI </a>
		  </li>
	 </ul>
  </div>
</nav>


</body>
</html>
