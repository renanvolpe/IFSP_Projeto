<?php
//Página incial
include '../ConexaoBanco.php';
include '../ChamarBoostrap.php';
include_once ('../config.php');


if(isset($_REQUEST['submit']) and $_REQUEST['submit']!=""){
	extract($_REQUEST);
	if($privilegio==""){
		$privilegio="paciente";
		if($login==""){ //se o campo login estiver vazio...
			header('location:'.$_SERVER['PHP_SELF'].'?msg=login'); //irá exibir isso no final da URL
			exit;
		}elseif($senha==""){
			header('location:'.$_SERVER['PHP_SELF'].'?msg=senha');
			exit;
		}else{
			
			$userCount	=	$db->getQueryCount('login','idLogin');
			$data	=	array(
							'login'=>$login,
							'senha'=>$senha,
							'privilegio'=>$privilegio,
						);
			$insert	=	$db->insert('login',$data);

			//depois de cadastrar login, iremos cadastrar endereço...
			if($rua==""){ //se o campo rua estiver vazio...
				header('location:'.$_SERVER['PHP_SELF'].'?msg=rua'); //irá exibir isso no final da URL
				exit;
			}elseif($bairro==""){
				header('location:'.$_SERVER['PHP_SELF'].'?msg=bairro');
				exit;
			}elseif($cidade==""){
				header('location:'.$_SERVER['PHP_SELF'].'?msg=cidade');
				exit;
			}elseif($estado==""){
				header('location:'.$_SERVER['PHP_SELF'].'?msg=estado');
				exit;
			}elseif($numero==""){
				header('location:'.$_SERVER['PHP_SELF'].'?msg=numero');
				exit;
			}elseif($cep==""){
				header('location:'.$_SERVER['PHP_SELF'].'?msg=cep');
				exit;
			}else{
				
				$userCount	=	$db->getQueryCount('endereco','idEndereco');
				$data	=	array(
								'rua'=>$rua,
								'bairro'=>$bairro,
								'complemento'=>$complemento,
								'cidade'=>$cidade,
								'estado'=>$estado,
								'numero'=>$numero,
								'cep'=>$cep,
							);
				$insert	=	$db->insert('endereco',$data);
			}	




			if($insert){
				header('location:Register.php?msg=ras'); //adicionado com sucesso
				exit;
			}else{
				header('location:Register.php?msg=rna'); //deu ruim, boy
				exit;
			}
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

<?php
	include 'nav.php';
?>
<div class="container">
	
	
		<div class="jumbotorn bg-primary" style=" margin-top:40px;  border-radius: 10px;">
		<?php

		if(isset($_REQUEST['msg']) and $_REQUEST['msg']=="un"){

			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> User name is mandatory field!</div>';

		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="ue"){

			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> User email is mandatory field!</div>';

		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="up"){

			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> User phone is mandatory field!</div>';

		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="ras"){

			echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> Record added successfully!</div>';

		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="rna"){

			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Record not added <strong>Please try again!</strong></div>';

		}elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="dsd"){

			echo	'<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Please delete a user and then try again <strong>We set limit for security reasons!</strong></div>';

		}

		?>

		      <div class="text-center">
		      	<h2 style="color: white; padding: 20px;"> Cadastro </h2>
		      </div>

		      <div class="bg-light" style="margin:2px; padding:10px 10px" >
			  
					<h3>Dados Pessoais:</h3>  
					<hr>

					<form method="post">
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
										<option value="Na" selected>Não sei</option>
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
								<label for="rua">Rua:</label>
								<input type="Text" class="form-control" id="rua"  placeholder="Rua" name="rua">
								</div>
							</div>

							<div class="col-md-2">
							<div class="form-group">
							<label for="numero">Número:</label>
							<input type="Text" class="form-control" id="numero"  placeholder="Número" name="numero">
								</div>
							</div>

							<div class="col-md-2">
							<div class="form-group">
							<label for="estado">Estado:</label>
							<input type="Text" class="form-control" id="estado"  placeholder="Estado" name="estado">
								</div>
							</div>

							<div class="col-md-4">
							<div class="form-group">
							<label for="bairro">Bairro:</label>
							<input type="Text" class="form-control" id="bairro"  placeholder="Bairro" name="bairro">
								</div>
							</div>

							<div class="col-md-4">
							<div class="form-group">
							<label for="cep">CEP:</label>
							<input type="Text" class="form-control" id="cep"  placeholder="CEP" name="cep">
								</div>
							</div>

							<div class="col-md-4">
							<div class="form-group">
							<label for="cidade">Cidade:</label>
							<input type="Text" class="form-control" id="cidade"  placeholder="Cidade" name="cidade">
								</div>
							</div>
							
							<div class="col-md-12">
							<div class="form-group">
							<label for="complemento">Complemento:</label>
							<input type="Text" class="form-control" id="complemento"  placeholder="Complemento" name="complemento">
								</div>
							</div>
							
							</div>

							<h3> Dados de Email: </h3>
					<div class="row form-group">
							<div class="col-md-6">
							<div class="form-group">
							<label for="login">Email:</label>
							<input type="email" class="form-control" id="login"  placeholder="Email" name="login">
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
							<label for="senha">Senha:</label>
							<input type="password" class="form-control" id="senha"  placeholder="Senha" name="senha" >
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
							<button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary btn-lg btn-block"> Enviar cadastro </button>
							</div>
					</form>
					

							
						
						

						
					</div>
					

   			

		</div>
		
			
		<div class="">
				
		</div>
		
</div>

	
	


</body>
</html>