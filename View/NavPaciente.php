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
			
			$NomePaciente = $pessoa['nome'];
		}else{
			
		}
 ?>
<!DOCTYPE html>
<html>
<head>

  <title>Área Paciente</title>
</head>
<body>
<nav class="navbar  navbar-expand-lg navbar-dark bg-primary" style="border-bottom: 1px solid black" role="tablist">
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
	          <a class="nav-link active" href="#agenda">Confirmação</a>
	        </li>
			<li class="nav-item">
	          <a class="nav-link active" href="#noti">Sucesso</a>
	        </li>




     	 </ul>
		  <ul class="navbar-nav ml-auto">

		  <li class="nav-item ml-auto">
				<button class="btn btn-outline-secondary navbar-brand">Olá! Sr <?php echo $NomePaciente ;?> </button>
		  </li>
		  <li class="nav-item ml-auto">
		  <a class="btn btn-danger navbar-brand" href="../controller/DesfazerLogin.php" > Sair </a>
		  </li>
		  </ul>

	    </div>
  </div>
</nav>


</body>
</html>
