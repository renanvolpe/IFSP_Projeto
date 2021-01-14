<?php
//Página incial
include '../ConexaoBanco.php';
include '../ChamarBoostrap.php';
include_once ('../config.php');


if(isset($_REQUEST['submit']) and $_REQUEST['submit']!=""){
	extract($_REQUEST);
	
		$privilegio="paciente";
		if($login==""){ //se o campo login estiver vazio...
			header('location:'.$_SERVER['PHP_SELF'].'?msg=login'); //irá exibir isso no final da URL
			exit;
		}elseif($senha==""){
			header('location:'.$_SERVER['PHP_SELF'].'?msg=senha');
			exit;
		}else{
			//O login estava aqui
										
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
				//O endereço estava aqui
				
				//depois de cadastrar endereço, iremos cadastrar telefone...
				if($tel1==''){//se o campo telefone principal estiver vazio...
					header('location:'.$_SERVER['PHP_SELF'].'?msg=telP'); //irá exibir isso no final da URL
					exit;
				}
				elseif($tel2==''){
					header('location:'.$_SERVER['PHP_SELF'].'?msg=telS'); 
					exit;
				}
				elseif($cel1==''){
					header('location:'.$_SERVER['PHP_SELF'].'?msg=celP');
					exit;
				}
				elseif($cel2==''){
					header('location:'.$_SERVER['PHP_SELF'].'?msg=celS');
					exit;
				}else{
					//O telefone estava aqui
					

					//depois de cadastrar telefone, iremos cadastrar pessoa...
					if($cpf==''){//se o campo cpf estiver vazio...
						header('location:'.$_SERVER['PHP_SELF'].'?msg=cpf'); //irá exibir isso no final da URL
						exit;
					}
					elseif($nome==''){
						header('location:'.$_SERVER['PHP_SELF'].'?msg=nome'); 
						exit;
					}else{
						//A pessoa estava aqui
						

						//depois de cadastrar pessoa, iremos cadastrar paciente...
						if($tipoSanguineo==''){//se o campo tipo sanguineo estiver vazio...
							header('location:'.$_SERVER['PHP_SELF'].'?msg=ts'); //irá exibir isso no final da URL
							exit;
						}
						elseif($sexo==''){
							header('location:'.$_SERVER['PHP_SELF'].'?msg=sexo'); 
							exit;
						}elseif($dataNascimento==''){
							header('location:'.$_SERVER['PHP_SELF'].'?msg=dn'); 
							exit;
						}else{
							//Depois de confirmar todos os dados os mesmos serão inseridos no banco

							//inserindo login
							$userCount	=	$db->getQueryCount('login','idLogin');
							$data	=	array(
											'login'=>$login,
											'senha'=>$senha,
											'privilegio'=>$privilegio,
										);
							$insert	=	$db->insert('login',$data);
							$login_IdLogin = $db->lastInsertId(); //retorna o ultimo id inserido em login

							//inserindo o endereço
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
							$endereco_IdEndereco = $db->lastInsertId(); //retorna o ultimo id inserido em endereço

							//inserindo o telefone
							$userCount	=	$db->getQueryCount('telefone','idTelefone');
							$data	=	array(
											'tel1'=>$tel1,
											'tel2'=>$tel2,
											'cel1'=>$cel1,
											'cel2'=>$cel2,
										);
							$insert	=	$db->insert('telefone',$data);
							$telefone_IdTelefone = $db->lastInsertId(); //retorna o ultimo id inserido em telefone

							//inserindo a pessoa
							$userCount	=	$db->getQueryCount('pessoa','idPessoa');
							$data	=	array(
											'cpf'=>$cpf,
											'nome'=>$nome,
											'endereco_IdEndereco'=>$endereco_IdEndereco,
											'telefone_IdTelefone'=>$telefone_IdTelefone,
											'login_IdLogin'=>$login_IdLogin,
										);
							$insert	=	$db->insert('pessoa',$data);
							$pessoa_IdPessoa = $db->lastInsertId(); //retorna o ultimo id inserido em pessoa

							//inserindo o paciente
							$userCount	=	$db->getQueryCount('paciente','idPaciente');
							$data	=	array(
											'tipoSanguineo'=>$tipoSanguineo,
											'sexo'=>$sexo,
											'dataNascimento'=>$dataNascimento,
											'pessoa_IdPessoa'=>$pessoa_IdPessoa,
										);
							$insert	=	$db->insert('paciente',$data);
							
					}
					}
				}
			}	




			if($insert){
				 
				echo "<script>alert('Login realizado com Sucesso!');location.href=\"Login.php\";</script>";
				//header('location:Login.php'); //adicionado com sucesso
				exit;
			}else{
				header('location:Register.php?msg=rna'); //deu ruim, boy, boy o caraio, me respeita
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
<nav class="navbar  navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
	    <a class="navbar-brand" href="#Home">Home</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    
			
     	 </ul>
		  <ul class="navbar-nav ml-auto">

		  <li class="nav-item ml-auto">
		  		
				<a href="Login.php" class="btn btn-danger navbar-brand" > Fazer Login </a> 
		  </li>
		  </ul>
		 
	    </div>
  </div>
</nav>


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
							<label for="nome">Nome Completo:</label>
							<input type="text" class="form-control" id="nome"  placeholder="Nome Completo" name="nome" autofocus>
							
							</div>
							</div>
							<div class="col-md-3 control-label">
								<div class="form-group">
									<label for="tipoSanguineo">Tipo Sanguíneo:</label>
									<select class="form-control" id="tipoSanguineo" name='tipoSanguineo'>
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

							<div class="col-md-3">
								<div class="form-floating">
								<label for="tel1">Telefone Principal:</label>
								<input type="text" class="form-control" id="tel1" placeholder="xxxx-xxxx" value="" name="tel1">
								
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-floating">
								<label for="tel2">Telefone Segundario:</label>
								<input type="text" class="form-control" id="tel2" placeholder="xxxx-xxxx" value="" name="tel2">
								
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-floating">
								<label for="cel1">Celular Principal:</label>
								<input type="text" class="form-control" id="cel1" placeholder="xxxxx-xxxx" value="" name="cel1">
								
								</div>
							</div>
							
							<div class="col-md-3">
								<div class="form-floating">
								<label for="cel2">Celular Segundario:</label>
								<input type="text" class="form-control" id="cel2" placeholder="xxxxx-xxxx" value="" name="cel2">
								
								</div>
							</div>

							

							<div class="col-md-4">
								<div class="form-floating">
								<label for="cpf">CPF:</label>
								<input type="text" class="form-control" id="cpf" placeholder="CPF" value="" name="cpf">
								
								</div>
							</div>

							<div class="col-md-4 ">
								<div class="form-floating">
								<label for="dataNascimento">Data nascimento:</label>
								<input type="date" class="form-control" id="dataNascimento" placeholder="<?php echo "date"; ?>" value="" name="dataNascimento">
								
								</div>
							</div>

							<div class="col-md-4 control-label">
								<div class="form-group">
									<label for="sexo">Sexo:</label>
									<select class="form-control" id="sexo" name='sexo'>
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