<?php

include 'ChamarBoostrap.php';
include_once ('config.php');
?>



 <?php
 if($_SESSION['privilegio'] == 'paciente'){
	 $idLogin = $_SESSION['clinica'];

		$condition = ' AND login_idLogin LIKE "'.$idLogin .'"';
		$userData    =    $db->getAllRecords('pessoa','*',$condition,'');
		if(count($userData)>0){
		  $s    =    '';
		  foreach($userData as $pessoa){
			$s++;
			}

      $NomePaciente = $pessoa['nome'];
      
		}else{
        echo 'aonde que eu to, jesus';
		}
 } elseif($_SESSION['privilegio'] == 'admim')
 		$NomePaciente = 'Administrador';
	
	
 ?> 
<!DOCTYPE html>
<html>
<head>
<link href="../css/estlioPaginaPrincipal.css" rel="stylesheet"/>
  <title>Área Paciente</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary border rounded p-2 mb-2">
  <a class="navbar-brand" href="index2.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Escolha um Horário</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="View/AtualizarPaciente.php">Confirmar Dados</a>
      </li>
	  <li class="nav-item  active">
        <a class="nav-link" href="View/SucessoPaciente.php">Sucesso</a>
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
			<button class="btn btn-outline-secondary navbar-brand">Olá! Sr <?php echo $NomePaciente ;?> </button>
		</li>
		<li class="nav-item ml-auto">
		<a class="btn btn-danger navbar-brand" href="controller/DesfazerLogin.php" > Sair </a>
		</li>
	</ul>
  </div>
</nav>


</body>
</html>
