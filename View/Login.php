<?php
//Página incial

include '../ChamarBoostrap.php';
include_once ('../config.php');



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
			$s++;}

			
			$senhaBanco = $val['senha'];
			$senhaSubmit = $_REQUEST['senha'];
			
			if( $val['login'] == $_REQUEST['login']) {

				if($senhaBanco == $senhaSubmit)
					echo "<script>alert('Login realizado com Sucesso!');location.href=\"calendario.php\";</script>";
				else
					echo "<script>alert('Deu ruim na senha!');</script>";
				
				exit;

			//	echo "<script>alert('Login realizado com Sucesso!');location.href=\"calendario.php\";</script>";
			} else{
				echo "<script>alert('Deu ruim no Login!');</script>";
				exit;
			}

		  }else{ 
			  exit;
		  }
	  
          
        

		
	}
}

?>

<!DOCTYPE html>
<html>
<head>


 

  <title>Clinica médica</title>
</head>
<body>

<head>

<body>


<!-- login HTML -->
<nav class="navbar  navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
	    <a class="navbar-brand" href="#Home">Home</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    
			
     	 </ul>
		  <ul class="navbar-nav ml-auto">

		  <li class="nav-item ml-auto">
		  		
				<a href="Register.php" class="btn btn-danger navbar-brand" > Cadastre-se </a> 
		  </li>
		  </ul>
		 
	    </div>
  </div>
</nav>

</nav>

<form method="POST">
	<div class="container " style="margin-top:5%">
		<div class="text-center">
				<img class="rounded mx-auto d-block" src="https://seeklogo.com/images/C/caduceo-medico-logo-514CD7BD9E-seeklogo.com.png" alt="Card image cap">
			</div>
		<div class="row justify-content-md-center">
		<div class="card text-center col-8 ">		
			<div class="card-body">
			<h5 class="card-title"></h5>
			<p class="card-text">
				<div class="form-group row">
					<label for="email" class="col-sm-3 col-form-label text-info text-right">Endereço de e-mail</label>
					<div class="col">
						<input type="email" class="form-control" id="email" name="login" placeholder="Insira seu e-mail">
					</div>
				</div>
				<div class="form-group row">
					<label for="password" class="col-sm-3 col-form-label text-info text-right">Senha</label>
					<div class="col">
					<input type="password" class="form-control" id="password" name="senha" placeholder="Insira sua senha">
					</div>
				</div>

			</p>
			<div class="row align-items-center">
				<div class="col">
					<button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary">Login</button>  
					&nbsp
					<a href="#"> Esqueceu a senha?</a>
					&nbsp
					
					
				</div>
			</div>
			
			</div>
		</div>
		</div>
	</div> 
</form>   
 
</body>
</html>