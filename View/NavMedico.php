<?php

include '../ChamarBoostrap.php';
include_once ('../config.php');
?>



 <?php
	$idLogin = $_SESSION['clinica'];

		$condition = 'AND login_idLogin LIKE "'.$idLogin .'"';
		$userData    =    $db->getAllRecords('pessoa','*',$condition,'');
		if(count($userData)>0){
		  $s    =    '';
		  foreach($userData as $pessoa){
			$s++;
			}

			$NomeMedico = $pessoa['nome'];
		}else{

		}
 ?>

<!DOCTYPE html>
<html lang=”pt-br”>

<head>
    <title>Área Médico</title>

</head>

<body>
<!--
<nav class="navbar  navbar-expand-lg navbar-dark bg-primary" style="border-bottom: 1px solid black">
        <div class="container-fluid">
            <a class="navbar-brand" href="CadastrarMedico.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="ListarPacienteMedico.php">Pacientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link "  href="calendarioMedico.php"> Calendário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#avaliacao">Avaliações</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#agenda">Agenda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#noti">Notificações</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#avaliacao">Avaliações</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ml-auto">
                        <button class="btn btn-outline-secondary navbar-brand">Olá! Dr <?php echo $NomeMedico ;?> </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
-->
<nav class="navbar  navbar-expand-lg navbar-dark bg-primary border rounded p-2 mb-2">
  <a class="navbar-brand" href="../index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="ListarPaciente.php">Pacientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active"  href="calendarioMedico.php"> Calendário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#avaliacao">Avaliações</a>
                    </li>
                   
                </ul>
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ml-auto">
                        <button class="btn btn-outline-secondary navbar-brand">Olá! Dr <?php echo $NomeMedico ;?> </button>
                    </li>
                    <li class="nav-item ml-auto">
		                <a class="btn btn-danger navbar-brand" href="../controller/DesfazerLogin.php" > Sair </a>
		            </li>
                </ul>
                
  </div>
</nav>
</body>

</html>
