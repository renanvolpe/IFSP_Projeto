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
							<label for="NomeCompleto">Nome Completo:</label>
							<input type="text" class="form-control" id="NomeCompleto"  placeholder="Nome Completo" name="NomeCompleto" autofocus>
							
							</div>
							</div>
							<div class="col-md-3 control-label">
								<div class="form-group">
									<label for="tipoSangue">Tipo Sanguíneo:</label>
									<select class="form-control" id="tipoSangue">
										<option value="N/a" selected>Não sei</option>
										<option value="A+">A+</option>
										<option value="A-">A-</option>
										<option value="B+">B+</option>
										<option value="B-">B-</option>
										<option value="O+">O+</option>
										<option value="O-">O-</option>
										<option value="AB+">AB+</option>
										<option value="AB-">AB-</option>
									</select>
								</div>
							</div>

							<div class="col-md-2">
								<div class="form-floating">
								<label for="ddd1">DDD:</label>
								<input type="text" class="form-control" id="ddd1" placeholder="(__)" value="" name="ddd1">
								
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-floating">
								<label for="telefonePrincipal">Telefone Principal:</label>
								<input type="text" class="form-control" id="telefonePrincipal" placeholder="xxxx-xxxx" value="" name="telefonePrincipal">
								
								</div>
							</div>

							<div class="col-md-2">
								<div class="form-floating">
								<label for="ddd2">DDD:</label>
								<input type="text" class="form-control" id="ddd2" placeholder="(__)" value="" name="ddd2">
								
								</div>
							</div>
							
							<div class="col-md-4">
								<div class="form-floating">
								<label for="celular">Celular:</label>
								<input type="text" class="form-control" id="celular" placeholder="xxxxx-xxxx" value="" name="celular">
								
								</div>
							</div>

							

							<div class="col-md-4">
								<div class="form-floating">
								<label for="CPF_Paciente">CPF:</label>
								<input type="text" class="form-control" id="CPF_Paciente" placeholder="CPF" value="" name="CPF_Paciente">
								
								</div>
							</div>

							<div class="col-md-4 ">
								<div class="form-floating">
								<label for="Nascimento">Data nascimento:</label>
								<input type="date" class="form-control" id="Nascimento" placeholder="<?php echo "date"; ?>" value="" name="Nascimento">
								
								</div>
							</div>

							<div class="col-md-4 control-label">
								<div class="form-group">
									<label for="sexo">Sexo:</label>
									<select class="form-control" id="sexo">
										<option value="X" selected>Prefiro não dizer</option>
										<option value="F">F</option>
										<option value="M">M</option>
									</select>
								</div>
							</div>
					</div>

					
					<h3> Endereço: </h3>
							<hr>
							<div class="row form-group">

							<div class="col-md-8">
								<div class="form-group">
								<label for="Rua">Rua:</label>
								<input type="Text" class="form-control" id="Rua"  placeholder="Rua" name="Rua">
								</div>
							</div>

							<div class="col-md-2">
							<div class="form-group">
							<label for="Numero">Número:</label>
							<input type="Text" class="form-control" id="Numero"  placeholder="Número" name="Numero">
								</div>
							</div>

							<div class="col-md-2">
							<div class="form-group">
							<label for="Estado">Estado:</label>
							<input type="Text" class="form-control" id="Estado"  placeholder="Estado" name="Estado">
								</div>
							</div>

							<div class="col-md-4">
							<div class="form-group">
							<label for="Bairro">Bairro:</label>
							<input type="Text" class="form-control" id="Bairro"  placeholder="Bairro" name="Bairro">
								</div>
							</div>

							<div class="col-md-4">
							<div class="form-group">
							<label for="CEP">CEP:</label>
							<input type="Text" class="form-control" id="CEP"  placeholder="CEP" name="CEP">
								</div>
							</div>

							<div class="col-md-4">
							<div class="form-group">
							<label for="Cidade">Cidade:</label>
							<input type="Text" class="form-control" id="Cidade"  placeholder="Cidade" name="Cidade">
								</div>
							</div>
							
							<div class="col-md-12">
							<div class="form-group">
							<label for="Complemento">Complemento:</label>
							<input type="Text" class="form-control" id="Complemento"  placeholder="Complemento" name="Complemento">
								</div>
							</div>
							
							</div>

							<h3> Dados de Email: </h3>
					<div class="row form-group">
							<div class="col-md-6">
							<div class="form-group">
							<label for="Email">Email:</label>
							<input type="email" class="form-control" id="Email"  placeholder="Email" name="Email">
								</div>
							</div>


							<div class="col-md-6">
							<div class="form-group">
							<label for="confEmail">Confirmar Email:</label>
							<input type="email" class="form-control" id="confEmail" name="confEmail" placeholder="Confirmar Email" >
								</div>
							</div>

							<div class="col-md-6">
							<div class="form-group">
							<label for="Senha">Senha:</label>
							<input type="password" class="form-control" id="Senha"  placeholder="Senha" name="Senha" >
								</div>
							</div>

							<div class="col-md-6">
							<div class="form-group">
							<label for="confSenha">Confirmar Senha:</label>
							<input type="password" class="form-control" id="confSenha" name="confSenha" placeholder="Confirmar Senha"  >
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