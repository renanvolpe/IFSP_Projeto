<?php
session_start();
include 'NavPaciente.php';
include '../ChamarBoostrap.php';
?>


<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Atualizar Paciente</title>
    </head>
        <script type='text/javascript'> <!-- nao apagar, precisa para funcionar o botão IMPRIMIR -->
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
<div class="container">
    <h1>Bem-Vindo, caro Paciente! Aqui é sua área restrita. Caso precise, atualize seus dados</h1>
     <div class="jumbotorn bg-primary" style=" margin-top:40px;  border-radius: 10px;">

        <div class="text-center">
        <div id='main-content'> <!-- nao apagar, precisa para funcionar o botão IMPRIMIR , lembrar de fechar DIV no final antes da DIV do container-->
            <h2 style="color: white; padding: 20px;"> Dados Pessoais: </h2>

		      <div class="bg-light" style="margin:2px; padding:10px 10px" >

					<hr> <!-- após arrumar o BD retirar o que estiver dentro de value="1233-2131" e deixa values="" -->

					<form method="post">
					<div class="row form-group"  >
							<div class="col-md-9 "  >
							<div class="form-group">
							<label for="nome">Nome Completo:</label>
							<input type="text" class="form-control" id="nome"  placeholder="Nome Completo" name="nome" autofocus required value="Tadeu Espindola Palermo">

							</div>
							</div>
							<div class="col-md-3 control-label">
								<div class="form-group">
									<label for="tipoSanguineo">Tipo Sanguíneo:</label>
									<select class="form-control" id="tipoSanguineo" name='tipoSanguineo' required>
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
								<input type="text" class="form-control" id="tel2" placeholder="xxxx-xxxx" value="" name="tel2" >

								</div>
							</div>

							<div class="col-md-3">
								<div class="form-floating">
								<label for="cel1">Celular Principal:</label>
								<input type="text" class="form-control" id="cel1" placeholder="xxxxx-xxxx" value="1233-2131" name="cel1" >

								</div>
							</div>

							<div class="col-md-3">
								<div class="form-floating">
								<label for="cel2">Celular Segundario:</label>
								<input type="text" class="form-control" id="cel2" placeholder="xxxxx-xxxx" value="1233-2131" name="cel2" "">

								</div>
							</div>

							<div class="col-md-4">
								<div class="form-floating">
								<label for="cpf">CPF:</label>
								<input type="text" class="form-control" id="cpf" placeholder="CPF" value="045.448.379-10" name="cpf" r>

								</div>
							</div>

							<div class="col-md-4 ">
								<div class="form-floating">
								<label for="dataNascimento">Data nascimento:</label>
								<input type="date" class="form-control" id="dataNascimento" placeholder="<?php echo "date"; ?>" value="" name="dataNascimento" >

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

							<div class="col-md-6">
								<div class="form-group">
								<label for="rua">Rua:</label>
								<input type="Text" class="form-control" id="rua"  placeholder="Rua" name="rua" value="Rua Cinco de Maio">
								</div>
							</div>

							<div class="col-md-2">
							<div class="form-group">
							<label for="complemento">Complemento:</label>
							<input type="Text" class="form-control" id="complemento"  placeholder="Complemento" name="complemento">
								</div>
							</div>

							<div class="col-md-2">
							<div class="form-group">
							<label for="numero">Número:</label>
							<input type="Text" class="form-control" id="numero"  placeholder="Número" name="numero" value="123">
								</div>
							</div>

							<div class="col-md-2">
							<div class="form-group">
							<label for="estado">Estado:</label>
							<input type="Text" class="form-control" id="estado"  placeholder="Estado" name="estado" value="SP">
								</div>
							</div>

							<div class="col-md-4">
							<div class="form-group">
							<label for="bairro">Bairro:</label>
							<input type="Text" class="form-control" id="bairro"  placeholder="Bairro" name="bairro" value="Centro">
								</div>
							</div>

							<div class="col-md-4">
							<div class="form-group">
							<label for="cep">CEP:</label>
							<input type="Text" class="form-control" id="cep"  placeholder="CEP" name="cep" value="12.432.321-32">
								</div>
							</div>

							<div class="col-md-4">
							<div class="form-group">
							<label for="cidade">Cidade:</label>
							<input type="Text" class="form-control" id="cidade"  placeholder="Cidade" name="cidade" value="Jacarei">
								</div>
					</div>
			</div>
         <div><form> <!-- nao apagar, precisa para funcionar o botão IMPRIMIR -->
	   <input onclick="javascript:void(printContent());" type="button" value="Imprimir" class="btn btn-info" />
 </form>
  <td><a aria-current="page" href="NavListarPaciente.php" class="btn btn-success">Editar</a></td>
	   <!-- nao apagar, precisa para funcionar o botão IMPRIMIR -->
	</div>  </div>
        </div>
</div>




    </div>		<hr>
							<div class="text-center">

							<button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary btn-lg btn-block">Atualizar Dados </button>
            </form>
<br>
         </body>
</html>
