<?php
session_start();

include '../ChamarBoostrap.php';
include_once ('../config.php');

?>

<script rel="stylesheet" href="../sweetalert/sweetalert.js"> 
</script>

<?php
if( empty($_SESSION['clinica']) == false){
	if(isset($_SESSION['privilegio']) && $_SESSION['privilegio'] == 'paciente'){
		echo "teste1";
		header("location: calendario.php");
	}elseif(isset($_SESSION['privilegio']) && $_SESSION['privilegio'] == 'medico'){
		header("location: calendarioMedico.php");
	}elseif(isset($_SESSION['privilegio']) && $_SESSION['privilegio'] == 'admim'){
		header("location: Admin.php");
	}
}

//Página incial




$condition    =    '';
if(isset($_REQUEST['submit']) and $_REQUEST['submit']!=""){
	extract($_REQUEST);


	if($login==""){ //se o campo login estiver vazio...
		header('location:'.$_SERVER['PHP_SELF'].'?msg=login'); //irá exibir isso no final da URL
		exit;
	}elseif($senha==""){
		header('location:'.$_SERVER['PHP_SELF'].'?msg=senha');
		exit;
	}
	else{ // aqui vai se tudo tiver preenchido

		$condition .=    ' AND login LIKE "'.$_REQUEST['login'].'" ';
		$condition .=    ' AND senha LIKE "'.$_REQUEST['senha'].'" ';

		$userData    =    $db->getAllRecords('login','*',$condition,'ORDER BY idLogin');



		if(count($userData)>0){
		  $s    =    '';
		  foreach($userData as $val){

			$s++;
		    }
				//$_SESSION['idPaciente'] = $val['id'];

			$_SESSION['clinica'] =	$val['idLogin'];
			
			$s++;}


			$privilegio = $val['privilegio'];

			if($privilegio){
				$_SESSION['privilegio'] = $privilegio; 
				
				echo "<script>swal('Login realizado com Sucesso!');location.href=\"calendario.php\";</script>";
			}else{
				header('location:'.$_SERVER['PHP_SELF'].'?msg=dsd'); //privilegio nao encontrado
				exit;
			}

		  }
		}


		  


?>

<!DOCTYPE html>
<html>
<head>
	<link href="../css/estlioPaginaPrincipal.css" rel="stylesheet"/>
  <title>Clinica médica</title>

</head>
<body>

<head>

<body>

<!-- login HTML -->

<nav class="navbar  navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
	    <a class="navbar-brand" href="../index.php">Home</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>


     	 </ul>
		  <ul class="navbar-nav ml-auto">

		  <li class="nav-item ml-auto">

				<a href="Register.php" class="btn btn-dark navbar-brand" > Cadastre-se </a>
		  </li>
		  </ul>

	    </div>
  </div>
</nav>


<?php

		if(isset($_REQUEST['msg']) and $_REQUEST['msg']=="login"){

			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Login é obrigatório!</div>';

		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="senha"){

			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Senha é obrigatório!</div>';

		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rna"){

			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Usuário incorreto. <strong>Tente novamente!</strong></div>';

		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="dsd"){

			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Usuário (privilégio) não encontrado! </div>';

		}

		?>

<form method="POST">
	<div class="container " style="margin-top:5%">
		<div class="text-center ">
				<img class="rounded mx-auto d-block" src="https://seeklogo.com/images/C/caduceo-medico-logo-514CD7BD9E-seeklogo.com.png" alt="Card image cap">
			</div>
		<div class="row justify-content-md-center">
		<div class="card text-center col-8 ">
			<div class="card-body">
			<h5 class="card-title"></h5>
			<p class="card-text">
				<div class="form-group row border rounded p-3 mb-2">
					<label for="email" class="col-sm-3 col-form-label text-info text-right">Endereço de e-mail</label>
					<div class="col">
						<input type="email" class="form-control" id="email" name="login" placeholder="Insira seu e-mail" required>
					</div>
				</div>
				<div class="form-group row">
					<label for="password" class="col-sm-3 col-form-label text-info text-right">Senha</label>
					<div class="col">
					<input type="password" class="form-control" id="password" name="senha" placeholder="Insira sua senha" required>
					</div>
				</div>

			</p>
			<div class="row align-items-center">
				<div class="col">
					<button type="submit" name="submit" value="submit" id="submit" class="btn bg-primary">Login</button>
					&nbsp
				</div>
			</div>

			</div>
		</div>
		</div>
	</form></div>

</body>

</html>


