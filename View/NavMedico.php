<?php

include '../ChamarBoostrap.php';
include_once ('../config.php');

 if($_SESSION['privilegio'] == 'medico'){
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

    }elseif($_SESSION['privilegio'] == 'admim')
             $NomeMedico = 'Administrador';
?>

<!DOCTYPE html>
<html lang=”pt-br”>

<head>
    <title>Área Médico</title>
    <link href="../css/estlioPaginaPrincipal.css" rel="stylesheet"/>
</head>

<body>
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
                        <a class="nav-link active"  href="index.php"> Calendário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#avaliacao">Avaliações</a>
                    </li>
                   
                </ul>
                
                <ul class="navbar-nav ml-auto">
                    <?php
                        if($_SESSION['privilegio'] == 'admim'){
                            ?>
                                <li class="nav-item ">
                                  <a href="Admin.php" class="btn btn-success navbar-brand"> Adminstração </a>
                                 </li>
                            <?php
                        }

                    ?>


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
