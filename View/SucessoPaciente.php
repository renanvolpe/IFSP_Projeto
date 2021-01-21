<?php
session_start();

if( empty($_SESSION['clinica']) == false ){
	if($_SESSION['privilegio'] == 'medico'){
                //header("location: calendarioMedico.php");
                //echo 'medico';
	}elseif($_SESSION['privilegio'] == 'paciente'){
                //echo 'paciente';
        
    }
	
	
}


include '../ChamarBoostrap.php';
include_once ('../config.php');

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
  <a class="navbar-brand" href="../index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Escolha um Horário</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="AtualizarPaciente.php">Confirmar Dados</a>
      </li>
	  <li class="nav-item  active">
        <a class="nav-link" href="SucessoPaciente.php">Sucesso</a>
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
		<a class="btn btn-danger navbar-brand" href="../controller/DesfazerLogin.php" > Sair </a>
		</li>
	</ul>
  </div>
</nav>


</body>
        <div class="" style="margin: 200px;">
        <?php
        if(isset($_REQUEST['msg']) and $_REQUEST['msg']=="up1"){
                echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> &nbsp Dados do paciente atualizados com sucesso! </div>';
        }elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="up2"){
                echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> &nbsp Dados de endereco atualizados com sucesso! </div>';
        }elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="up3"){
                echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> &nbsp Dados de telefone atualizados com sucesso! </div>';
        }elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="up12"){
                echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> &nbsp Dados do paciente e endereco atualizados com sucesso! </div>';
        }elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="up123"){
                echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> &nbsp Dados do paciente, endereco e telefone atualizados com sucesso! </div>';
        }elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="up13"){
                echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> &nbsp Dados do paciente e telefone atualizados com sucesso! </div>';
        }elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="up23"){
                echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> &nbsp Dados de endereco e telefone atualizados com sucesso! </div>';
        }elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="up0"){
                echo	'<div class="alert alert-dark"><i class="fa fa-exclamation-triangle"></i> &nbsp Parece que nenhum dado foi alterado! </div>';
        }
        ?>
                <div class="jumbotron">
                <h1 class="display-4">Cadastro realizado com Sucesso!</h1>
                        <p class="lead">Aguardaremos você em nossa clínica.</p>
                        <hr class="my-4">
                        <p>Afredecemos a preferência.</p>
                        <p class="lead">
                        <a class="btn btn-info btn-lg" href="../controller/DesfazerLogin.php" role="button">Voltar para Tela incial</a>
                </p>
                </div>
        </div>
</body>
</html>