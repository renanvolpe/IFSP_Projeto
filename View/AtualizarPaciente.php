<?php
session_start();
include '../ChamarBoostrap.php';
include_once("../conexao.php");
include_once('../config.php');

/**
 * Dados que usuario podera atualizar:
			  * paciente: tipo sanguineo
			  * endereco: tudo
			  * telefone: tudo
 */


 //Select esta ok
$idLogin = $_SESSION['clinica']; //esse eh o idlogin

$condition = 'AND login_idLogin LIKE "'.$idLogin .'"'; //identifica em pessoa quem tem aquele login
$condition = 'AND pessoa.endereco_idEndereco LIKE endereco.idEndereco'; //identifica em pessoa quem tem aquele endereco
$condition = 'AND pessoa.telefone_idTelefone LIKE telefone.idTelefone'; //identifica em pessoa quem tem aquele telefone
$condition = 'AND paciente.pessoa_idPessoa LIKE pessoa.idPessoa'; //identifica em paciente quem tem aquele idPessoa
$userData    =    $db->getAllRecords('pessoa, endereco, telefone, paciente','*',$condition,''); //puxa todos os dados daquela pessoa
if(count($userData)>0){
	$s    =    '';
	foreach($userData as $pessoa){
		$s++;
	}
	$PessoaId = $pessoa['idPessoa'];
	$PessoaNome = $pessoa['nome'];
	$PessoaCpf = $pessoa['cpf'];
	$PessoaEndereco = $pessoa['endereco_idEndereco'];
	$PessoaTelefone = $pessoa['telefone_idTelefone'];

	$PacienteTipoSanguineo = $pessoa['tipoSanguineo'];
	$PacienteSexo = $pessoa['sexo'];
	$PacienteDataNascimento = $pessoa['dataNascimento'];
	
	$TelefoneTel1 = $pessoa['tel1'];
	$TelefoneTel2 = $pessoa['tel2'];
	$TelefoneCel1 = $pessoa['cel1'];
	$TelefoneCel2 = $pessoa['cel2'];

	$EnderecoRua = $pessoa['rua'];
	$EnderecoBairro = $pessoa['bairro'];
	$EnderecoComplemento = $pessoa['complemento'];
	$EnderecoCidade = $pessoa['cidade'];
	$EnderecoEstado = $pessoa['estado'];
	$EnderecoNumero = $pessoa['numero'];
	$EnderecoCep = $pessoa['cep'];
}

/**
 * Dados que usuario podera atualizar:
			  * paciente: tipo sanguineo
			  * endereco: tudo
			  * telefone: tudo
 */

/*
$idPaciente=filter_input(INPUT_GET,'idPaciente' ,FILTER_SANITIZE_NUMBER_INT);
$result_usuario="SELECT * FROM paciente WHERE idPaciente='$idPaciente'";
$resultado_usuario=mysqli_query($conn, $result_usuario);
echo '<span></span>'.$resultado_usuario;
$row_usuario=mysqli_fetch_assoc($resultado_usuario);





if(isset($_REQUEST['editId']) and $_REQUEST['editId']!=""){
	header('location: atualizarpaciente.php?msg=semedit'); #<!-- nao teve alteracao -->
}

	if(isset($_REQUEST['submit']) and $_REQUEST['submit']!=""){
	extract($_REQUEST);
	//paciente
    if($tipoSanguineo==""){
      header('location:'.$_SERVER['PHP_SELF'].'?msg=un'); //msg campo obrigatorio
      exit;
    }
    $data	=	array(
        'idPaciente'=> $idPaciente, //colunas    
		'tipoSanguineo'=>$tipoSanguineo,
      );
    $update	=	$db->update('paciente',$data,array('idPaciente'=>$editId));
    if($update){
      header('location: sucessoPaciente.php?msg=rus'); #<!-- success -->
      exit;
    }else{
      header('location: atualizarpaciente.php?msg=rnu'); #<!-- nao teve alteracao -->
      exit;
	}
	
	/*endereco
	if($tipoSanguineo==""){
		header('location:'.$_SERVER['PHP_SELF'].'?msg=un'); //msg campo obrigatorio
		exit;
	  }
	  $data	=	array(
		  'idEndereco'=> $idEndereco, //colunas    
		  'rua'=>$rua,
		  'bairro'=>$bairro,
		  'complemento'=>$complemento,
		  'cidade'=>$cidade,
		  'estado'=>$estado,
		  'numero'=>$numero,
		  'cep'=>$cep,
		);
	  $update	=	$db->update('endereco',$data,array('idEndereco'=>$idEndereco));
	  if($update){
		header('location: sucessoPaciente.php?msg=rus2'); #<!-- success -->
		exit;
	  }else{
		header('location: atualizarpaciente.php?msg=rnu2'); #<!-- nao teve alteracao -->
		exit;
	  }
  }*/
/*
  if(isset($_REQUEST['editId']) and $_REQUEST['editId']!=""){
    $row= $db->getAllRecords('pessoa, paciente, endereco, telefone','pessoa.*,paciente.*, endereco.*, telefone.*',' AND idPaciente="'.$_REQUEST['editId'].'"');
  }

  if(isset($_REQUEST['submit']) and $_REQUEST['submit']!=""){
    extract($_REQUEST);
    if($tipoSanguineo==""){
      header('location:'.$_SERVER['PHP_SELF'].'?msg=un'); //msg campo obrigatorio
      exit;
    }

    $data	=	array(
        'idPaciente'=> $idPaciente, //colunas    
		'tipoSanguineo'=>$tipoSanguineo,
		'endereco_idEndereco'=>$endereco_idEndereco,
		'telefone_idTelefone'=>$telefone_idTelefone,
      );
    $update	=	$db->update('paciente',$data,array('idPaciente'=>$idPaciente));
    if($update){
      header('location: sucessoPaciente.php?msg=rus'); #<!-- success -->
      exit;
    }else{
      header('location: atualizarpaciente.php?msg=rnu'); #<!-- nao teve alteracao -->
      exit;
    }
  }
  */
?>


<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Atualizar Paciente</title>
    </head>
        <script type='text/javascript'> //<!-- nao apagar, precisa para funcionar o botão IMPRIMIR -->
        ///<![CDATA[ /* inicio configuracao head para IMPRESSAO/PRINT da pagina */ ATENÇÃO: acrescentar antes de <h2> Listagem de Pacientes</h2>
        //-->faz referencia str=document.getElementById('main-content').innerHTML <----
        //depois da <div id="centralpacientes">
        // e lembrar de fechar div </div> apos o fechar o codigo php
        function printContent() {
            str = document.getElementById('main-content').innerHTML
            newwin = window.open('', 'printwin', 'left=20,top=30,width=600,height=400')
            newwin.document.write('<HTML>\n<HEAD>\n')
            newwin.document.write('<TITLE>Print Page</TITLE>\n')
            newwin.document.write('<script>\n')
            newwin.document.write('function chkstate(){\n')
            newwin.document.write('if(document.readyState=="complete"){\n')
            newwin.document.write('window.close()\n')
            newwin.document.write('}\n')
            newwin.document.write('else{\n')
            newwin.document.write('setTimeout("chkstate()",2000)\n')
            newwin.document.write('}\n')
            newwin.document.write('}\n')
            newwin.document.write('function print_win(){\n')
            newwin.document.write('window.print();\n')
            newwin.document.write('chkstate();\n')
            newwin.document.write('}\n')
            newwin.document.write('<\/script>\n')
            newwin.document.write('</HEAD>\n')
            newwin.document.write('<BODY onload="print_win()">\n')
            newwin.document.write(str)
            newwin.document.write('</BODY>\n')
            newwin.document.write('</HTML>\n')
            newwin.document.close()
        }
        //]]>/* fim configuracao head para IMPRESSAO/PRINT da pagina */ ATENÇÃO: acrescentar <div id='main-content'> antes de <h2> Listagem de Pacientes</h2>
        // e lembrar de fechar div </div> apos o fechar o codigo php
    </script> <!-- nao apagar, precisa para funcionar o botão IMPRIMIR -->

<br>
</head>
<body>
<?php
include 'NavPaciente.php';
?>
<div class="container border rounded p-3 mb-2">
     <div class="jumbotorn bg-primary" style=" margin-top:40px;  border-radius: 10px;">

	 <div class="text-center" id="main-content"> <!-- nao apagar, precisa para funcionar o botão IMPRIMIR , lembrar de fechar DIV no final antes da DIV do container-->
		      	<h2 style="color: white; padding: 20px;"> Atualizar Cadastro </h2>
					
    			<p class="text-justify text-white"> &nbsp Bem-Vindo, caro Paciente! Aqui é sua área restrita. Caso precise, atualize seus dados</p>

		      </div>

			  <!-- 
					Dados que usuario podera atualizar:
			  * paciente: tipo sanguineo
			  * endereco: tudo
			  * telefone: tudo
			  -->

		      <div class="bg-light" style="margin:2px; padding:10px 10px" >
			  <div class="row justify-content-between align-items-center">
			  	<h3> &nbsp Dados Pessoais:</h3>
				<form class="text-right"> <!-- nao apagar, precisa para funcionar o botão IMPRIMIR -->	
					<button onclick="javascript:void(printContent());" class="btn btn-sm" style="background-color:transparent;">
					<i class="fa fa-print"></i><p class="font-weight-light">imprimir</p> 
					</button>
				</form>
			  </div>
			  
				<form method="post">
					<div class="row form-group"  >
							<div class="col-md-9 "  >
							<div class="form-group">
							<label for="nome">Nome Completo:</label>
							<input type="text" readonly class="form-control-plaintext" id="nome"  placeholder="<?php echo $PessoaNome; ?>" name="nome">

							</div>
							</div>

							<!--paciente: tipo sanguineo-->
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

							

							<!--telefone: tel1-->
							<div class="col-md-3">
								<div class="form-floating">
								<label for="tel1">Telefone Principal:</label>
								<input type="text" class="form-control" id="tel1" placeholder="<?php echo $TelefoneTel1; ?>" value="" name="tel1" autofocus>

								</div>
							</div>

							<!--telefone: tel2-->
							<div class="col-md-3">
								<div class="form-floating">
								<label for="tel2">Telefone Secundario:</label>
								<input type="text" class="form-control" id="tel2" placeholder="<?php echo $TelefoneTel2; ?>" value="" name="tel2">

								</div>
							</div>

							<!--telefone: cel1-->
							<div class="col-md-3">
								<div class="form-floating">
								<label for="cel1">Celular Principal:</label>
								<input type="text" class="form-control" id="cel1" placeholder="<?php echo $TelefoneCel1; ?>" value="" name="cel1">

								</div>
							</div>

							<!--telefone: cel2-->
							<div class="col-md-3">
								<div class="form-floating">
								<label for="cel2">Celular Secundario:</label>
								<input type="text" class="form-control" id="cel2" placeholder="<?php echo $TelefoneCel2; ?>" value="" name="cel2">

								</div>
							</div>

							<div class="col-md-4">
								<div class="form-floating">
								<label for="cpf">CPF:</label>
								<input type="text" readonly class="form-control-plaintext" id="cpf" placeholder="<?php echo $PessoaCpf; ?>" value="" name="cpf">

								</div>
							</div>

							<div class="col-md-4 ">
								<div class="form-floating">
								<label for="dataNascimento">Data nascimento:</label>
								<p><?php echo $PacienteDataNascimento; ?></p>

								</div>
							</div>

							<div class="col-md-4 control-label">
								<div class="form-group">
									<label for="sexo">Sexo:</label>
									<select readonly class="form-control-plaintext" id="sexo" name='sexo'>
										<option value="<?php echo $PacienteSexo; ?>" selected><?php echo $PacienteSexo; ?>  </option disabled>
									</select>
								</div>
							</div>
					</div>


					<h3> Endereço: </h3>
							<hr>
							<div class="row form-group">

							<!--endereco: rua-->
							<div class="col-md-8">
								<div class="form-group">
								<label for="rua">Rua:</label>
								<input type="Text" class="form-control" id="rua"  placeholder="<?php echo $EnderecoRua; ?>" name="rua">
								</div>
							</div>

							<!--endereco: numero-->
							<div class="col-md-2">
							<div class="form-group">
							<label for="numero">Número:</label>
							<input type="Text" class="form-control" id="numero"  placeholder="<?php echo $EnderecoNumero; ?>" name="numero">
								</div>
							</div>

							<!--endereco: estado-->
							<div class="col-md-2">
							<div class="form-group">
							<label for="estado">Estado:</label>
							<input type="Text" class="form-control" id="estado"  placeholder="<?php echo $EnderecoEstado; ?>" name="estado">
								</div>
							</div>

							<!--endereco: bairro-->
							<div class="col-md-4">
							<div class="form-group">
							<label for="bairro">Bairro:</label>
							<input type="Text" class="form-control" id="bairro"  placeholder="<?php echo $EnderecoBairro; ?>" name="bairro">
								</div>
							</div>

							<!--endereco: cep-->
							<div class="col-md-4">
							<div class="form-group">
							<label for="cep">CEP:</label>
							<input type="Text" class="form-control" id="cep"  placeholder="<?php echo $EnderecoCep; ?>" name="cep">
								</div>
							</div>

							<!--endereco: cidade-->
							<div class="col-md-4">
							<div class="form-group">
							<label for="cidade">Cidade:</label>
							<input type="Text" class="form-control" id="cidade"  placeholder="<?php echo $EnderecoCidade; ?>" name="cidade">
								</div>
							</div>

							<!--endereco: complemento-->
							<div class="col-md-12">
							<div class="form-group">
							<label for="complemento">Complemento:</label>
							<input type="Text" class="form-control" id="complemento"  placeholder="<?php echo $EnderecoComplemento; ?>" name="complemento">
								</div>
							</div>

							</div>

							<hr>
							<div class="text-center">
							
	   						<!-- nao apagar, precisa para funcionar o botão IMPRIMIR -->
							<div class="row">
								<input type="hidden" name="editId" id="editId" value="<?php echo $_REQUEST['editId']?>">
								<button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary btn-lg btn-block">Editar</button>
								<!--a href="teste.php?idPessoa=" . <?php //echo $pessoa['idPessoa']; ?>. class='btn btn-primary btn-sm'  role='button' aria-pressed='true'>EDITAR</a-->
							</div>
							</div>
					</form>
				</div>
		</div>
</div>

</body>

</html>