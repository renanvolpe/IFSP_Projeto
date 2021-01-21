<?php
session_start();

include '../ChamarBoostrap.php';
include_once('../config.php');

if( empty($_SESSION['clinica'])){
	if($_SESSION['privilegio'] == 'medico'){
                echo 'medico';
				//header("location: calendarioMedico.php");
	}elseif($_SESSION['privilegio'] == 'paciente' || "admim"){
        
    }
	
	
}
/**
 * Dados que usuario podera atualizar:
			  * paciente: tipo sanguineo
			  * endereco: tudo
			  * telefone: tudo
 */


 //Select esta ok
	if($_SESSION['privilegio'] == 'paciente'){
		$idLogin = $_SESSION['clinica']; //esse eh o idlogin
		$condition = "";
		//cuidado com sintaxe:   condition.=   para concatenar e   espaço antes de AND
		$condition .= ' AND login_idLogin LIKE "'.$idLogin.'"'; 
		//identifica em pessoa quem tem aquele login
		$condition .= ' AND pessoa.endereco_idEndereco LIKE endereco.idEndereco'; //identifica em pessoa quem tem aquele endereco
		$condition .= ' AND pessoa.telefone_idTelefone LIKE telefone.idTelefone'; //identifica em pessoa quem tem aquele telefone
		$condition .= ' AND paciente.pessoa_idPessoa LIKE pessoa.idPessoa'; //identifica em paciente quem tem aquele idPessoa
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

			$PacienteId = $pessoa['idPaciente'];
			$PacienteTipoSanguineo = $pessoa['tipoSanguineo'];
			$PacienteSexo = $pessoa['sexo'];
			$PacienteDataNascimento = $pessoa['dataNascimento'];
			
			$TelefoneTel1 = $pessoa['tel1'];
			$TelefoneTel2 = $pessoa['tel2'];
			$TelefoneCel1 = $pessoa['cel1'];
			$TelefoneCel2 = $pessoa['cel2'];

			$EnderecoId = $pessoa['idEndereco'];
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

		if(isset($_REQUEST['submit']) and $_REQUEST['submit']!=""){
			extract($_REQUEST);

			//paciente
			if($tipoSanguineo==""){
			header('location:'.$_SERVER['PHP_SELF'].'?msg=un'); //msg campo obrigatorio
			exit;
			}
			$data	=	array(   
				'tipoSanguineo'=>$tipoSanguineo,
			);
			$update1	=	$db->update('paciente',$data,array('idPaciente'=>$PacienteId));
			

			//endereco
			$data	=	array(   
				'rua'=>$rua,
				'bairro'=>$bairro,
				'complemento'=>$complemento,
				'cidade'=>$cidade,
				'estado'=>$estado,
				'numero'=>$numero,
				'cep'=>$cep,
				);
			$update2	=	$db->update('endereco',$data,array('idEndereco'=>$PessoaEndereco));
			

			//telefone
			$data	=	array(
				'tel1'=>$tel1,
				'tel2'=>$tel2,
				'cel1'=>$cel1,
				'cel2'=>$cel2,
				);
			$update3	=	$db->update('telefone',$data,array('idTelefone'=>$PessoaTelefone));
			
			if($update1 && $update2 && $update3){
				header('location: sucessoPaciente.php?msg=up123'); #<!-- success -->
				exit;
			}elseif($update2 && $update3){
				header('location: sucessoPaciente.php?msg=up23');
				exit;
			}elseif($update1 && $update3){
				header('location: sucessoPaciente.php?msg=up13');
				exit;
			}elseif($update1 && $update2){
				header('location: sucessoPaciente.php?msg=up12');
				exit;
			}elseif($update3){
				header('location: sucessoPaciente.php?msg=up3'); 
				exit;
			}elseif($update2){
				header('location: sucessoPaciente.php?msg=up2'); 
				exit;
			}elseif($update1){
				header('location: sucessoPaciente.php?msg=up1'); 
				exit;
			}else{
				header('location: sucessoPaciente.php?msg=up0'); #<!-- nao teve alteracao -->
				exit;
			}
		}
	}elseif($_SESSION['privilegio'] == 'admim') {
		$PessoaNome = '';
		$PacienteTipoSanguineo ='';
		$TelefoneTel1 = '';
		$TelefoneTel2 = '';
		$TelefoneCel1 = '';
		$TelefoneCel2 = '';
		$PessoaCpf ='';
		$PacienteDataNascimento ='';
		$PacienteSexo ='';
		$EnderecoRua ='';
		$EnderecoNumero = '';
		$EnderecoEstado = '';
		$EnderecoBairro='';
		$EnderecoCep ='';
		$EnderecoCidade = '';
		$EnderecoComplemento = ''; 
		$idLogin = '';
		
 	}
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
										<option value="<?php echo $PacienteTipoSanguineo; ?>"><?php echo $PacienteTipoSanguineo; ?></option>
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
								<input type="text" class="form-control" id="tel1" placeholder="<?php echo $TelefoneTel1; ?>" value="<?php echo $TelefoneTel1; ?>" name="tel1" autofocus>

								</div>
							</div>

							<!--telefone: tel2-->
							<div class="col-md-3">
								<div class="form-floating">
								<label for="tel2">Telefone Secundario:</label>
								<input type="text" class="form-control" id="tel2" placeholder="<?php echo $TelefoneTel2; ?>" value="<?php echo $TelefoneTel2; ?>" name="tel2">

								</div>
							</div>

							<!--telefone: cel1-->
							<div class="col-md-3">
								<div class="form-floating">
								<label for="cel1">Celular Principal:</label>
								<input type="text" class="form-control" id="cel1" placeholder="<?php echo $TelefoneCel1; ?>" value="<?php echo $TelefoneCel1; ?>" name="cel1">

								</div>
							</div>

							<!--telefone: cel2-->
							<div class="col-md-3">
								<div class="form-floating">
								<label for="cel2">Celular Secundario:</label>
								<input type="text" class="form-control" id="cel2" placeholder="<?php echo $TelefoneCel2; ?>" value="<?php echo $TelefoneCel2; ?>" name="cel2">

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
								<input type="Text" class="form-control" id="rua" value="<?php echo $EnderecoRua;?>" placeholder="<?php echo $EnderecoRua; ?>" name="rua">
								</div>
							</div>

							<!--endereco: numero-->
							<div class="col-md-2">
							<div class="form-group">
							<label for="numero">Número:</label> 
							<input type="Text" class="form-control" id="numero" value="<?php echo $EnderecoNumero;?>" placeholder="<?php echo $EnderecoNumero; ?>" name="numero">
								</div>
							</div>

							<!--endereco: estado-->
							<div class="col-md-2">
							<div class="form-group">
							<label for="estado">Estado:</label> 
							<input type="Text" class="form-control" id="estado" value="<?php echo $EnderecoEstado;?>" placeholder="<?php echo $EnderecoEstado; ?>" name="estado">
								</div>
							</div>

							<!--endereco: bairro-->
							<div class="col-md-4">
							<div class="form-group">
							<label for="bairro">Bairro:</label>
							<input type="Text" class="form-control" id="bairro" value="<?php echo $EnderecoBairro;?>" placeholder="<?php echo $EnderecoBairro; ?>" name="bairro">
								</div>
							</div>$

							<!--endereco: cep-->
							<div class="col-md-4">
							<div class="form-group">
							<label for="cep">CEP:</label>
							<input type="Text" class="form-control" id="cep" value="<?php echo $EnderecoCep;?>" placeholder="<?php echo $EnderecoCep; ?>" name="cep">
								</div>
							</div>

							<!--endereco: cidade-->
							<div class="col-md-4">
							<div class="form-group">
							<label for="cidade">Cidade:</label>
							<input type="Text" class="form-control" id="cidade" value="<?php echo $EnderecoCidade;?>" placeholder="<?php echo $EnderecoCidade; ?>" name="cidade">
								</div>
							</div>

							<!--endereco: complemento-->
							<div class="col-md-12"> 
							<div class="form-group">
							<label for="complemento">Complemento:</label>
							<input type="Text" class="form-control" id="complemento" value="<?php echo $EnderecoComplemento;?>" placeholder="<?php echo $EnderecoComplemento; ?>" name="complemento">
								</div>
							</div>

							</div>

							<hr>
							<div class="text-center">
							
	   						<!-- depois testar se echo não faz diferença com pacienteid -->
							<div class="row">
								<input type="hidden" name="editId" id="editId" value="<?php echo $idLogin; ?>">
								<button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary btn-lg btn-block">Confirmar</button>
							</div>
							</div>
					</form>
				</div>
		</div>
</div>

</body>

</html>