<?php
//Página incial
include '../ConexaoBanco.php';
include '../ChamarBoostrap.php';


?>

<!DOCTYPE html>
<html>
<head>


 

  <title>Clinica médica</title>
</head>
<body>

<head>

<body>
<?php
	include 'nav.php';
?>

<!-- login HTML -->
<div class="container">
	<div class="text-center">
			<img class="rounded mx-auto d-block" src="https://seeklogo.com/images/C/caduceo-medico-logo-514CD7BD9E-seeklogo.com.png" alt="Card image cap">
		</div>
	<div class="row justify-content-md-center">
	  <div class="card text-center col-8">		
		<div class="card-body">
		  <h5 class="card-title"></h5>
		  <p class="card-text">
			<div class="form-group row">
				<label for="email" class="col-sm-3 col-form-label text-info text-right">Endereço de e-mail</label>
				<div class="col">
					<input type="password" class="form-control" id="email" placeholder="Insira seu e-mail">
				</div>
			</div>
			<div class="form-group row">
				<label for="password" class="col-sm-3 col-form-label text-info text-right">Senha</label>
				<div class="col">
				  <input type="password" class="form-control" id="password" placeholder="Insira sua senha">
				</div>
			</div>

		  </p>
		  <div class="row align-items-center">
			<div class="col">
				<a href="#" class="btn btn-primary">Login</a>  
				&nbsp
				<a href="#" class="btn btn-danger">Limpar</a>  
				&nbsp &nbsp
				<a href="#"> Esqueceu a senha?</a>
			</div>
		  </div>
		  
		</div>
	  </div>
	</div>
</div>     
</body>
</html>