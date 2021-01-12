<?php
//Página incial
include '../ConexaoBanco.php';


?>

<!DOCTYPE html>
<html>
<head>


 <?php
	include '../ChamarBoostrap.php';
 ?>


  <title>Clinica médica</title>
</head>
<body>

<head>

<body>
<?php
	include 'nav.php';
?>
<div class="container">
	
	
		<div class="jumbotorn bg-primary" style=" margin-top:40px;  border-radius: 10px;">
			

		      <div class="text-center">
		      	<h2 style="color: white; padding: 20px;"> Cadastro </h2>
		      </div>

		      <div class="bg-light" style="margin:2px; padding:10px 10px" >
			  
					<h3>Dados Pessoais:</h3>  
					<hr>

					<form>
					<div class="row form-group"  >
							<div class="col-md-9 "  >
							<div class="form-group">
							<label for="exampleInputEmail1">Nome Completo</label>
							<input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Nome Completo" name="NomeCompleto">
							
							</div>
							</div>
							<div class="col-md-3 control-label" style="padding-bottom: 10px;">
								<div class="form-floating">
								<label for="floatingInputGrid">Tipo Sanguíneo:</label>
								<input type="text" class="form-control" id="floatingInputGrid" placeholder="Sangue" value="" name="TipoSangue">
								
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-floating">
								<label for="floatingInputGrid">Telefone Principal:</label>
								<input type="text" class="form-control" id="floatingInputGrid" placeholder="Telefone Principal" value="" name="telefonePrincipal">
								
								</div>
							</div>

							<div class="col-md-2">
								<div class="form-floating">
								<label for="floatingInputGrid">DDD:</label>
								<input type="text" class="form-control" id="floatingInputGrid" placeholder="DDD" value="" name="ddd1">
								
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-floating">
								<label for="floatingInputGrid">Telefone Secundário:</label>
								<input type="text" class="form-control" id="floatingInputGrid" placeholder="Telefone Principal" value="" name="telefoneSecond">
								
								</div>
							</div>

							<div class="col-md-2">
								<div class="form-floating">
								<label for="floatingInputGrid">DDD:</label>
								<input type="text" class="form-control" id="floatingInputGrid" placeholder="DDD" value="" name="ddd2">
								
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-floating">
								<label for="floatingInputGrid">CPF:</label>
								<input type="text" class="form-control" id="floatingInputGrid" placeholder="CPF" value="" name="CPF_Paciente">
								
								</div>
							</div>

							<div class="col-md-4 ">
								<div class="form-floating">
								<label for="floatingInputGrid">Data nascimento:</label>
								<input type="text" class="form-control" id="floatingInputGrid" placeholder="<?php echo "date"; ?>" value="" name="Nascimento">
								
								</div>
							</div>
					</div>

					
					<h3> Endereço: </h3>
							<hr>
							<div class="row form-group">

							<div class="col-md-8">
								<div class="form-group">
								<label for="exampleInputEmail1">Endereco:</label>
								<input type="Text" class="form-control" id=""  placeholder="Endereco" name="Endereco">
								</div>
							</div>

							<div class="col-md-2">
							<div class="form-group">
							<label for="exampleInputEmail1">Numero:</label>
							<input type="Text" class="form-control" id=""  placeholder="Numero" name="Numero">
								</div>
							</div>

							<div class="col-md-2">
							<div class="form-group">
							<label for="exampleInputEmail1">Estado:</label>
							<input type="Text" class="form-control" id=""  placeholder="Estado" name="Estado">
								</div>
							</div>

							<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputEmail1">Bairro:</label>
							<input type="Text" class="form-control" id=""  placeholder="Numero" name="Numero">
								</div>
							</div>

							<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputEmail1">CEP:</label>
							<input type="Text" class="form-control" id=""  placeholder="CEP" name="CEP">
								</div>
							</div>

							<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputEmail1">Cidade:</label>
							<input type="Text" class="form-control" id=""  placeholder="Cidade" name="Cidade">
								</div>
							</div>

							
							</div>

							<h3> Dados de Email: </h3>
					<div class="row">
							<div class="col-md-6">
							<div class="form-group">
							<label for="exampleInputEmail1">Email:</label>
							<input type="email" class="form-control" id=""  placeholder="Email" name="Email">
								</div>
							</div>


							<div class="col-md-6">
							<div class="form-group">
							<label for="exampleInputEmail1">Confirmar Email:</label>
							<input type="email" class="form-control" id=""  placeholder="Confirmar Email" >
								</div>
							</div>

							<div class="col-md-6">
							<div class="form-group">
							<label for="exampleInputEmail1">Senha:</label>
							<input type="password" class="form-control" id=""  placeholder="Senha" name="Senha" >
								</div>
							</div>

							<div class="col-md-6">
							<div class="form-group">
							<label for="exampleInputEmail1">Confirmar Senha:</label>
							<input type="password" class="form-control" id=""  placeholder="Cofirmar Senha"  >
								</div>
							</div>
							


							</div>
							<hr>
							<div class="text-center">
							<button type="button" class="btn btn-primary btn-lg btn-block"> Enviar cadastro </button>
							</div>
					</form>
					

							
						
						

						
					</div>
					

   			

		</div>
		
			
		<div class="">
				
		</div>
		
</div>

	
	


</body>


</body>
</html>