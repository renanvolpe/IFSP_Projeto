<?php
session_start();

include '../ChamarBoostrap.php';
include_once ('../config.php');

 if($_SESSION['privilegio'] == 'medico'){
	$idLogin = $_SESSION['clinica'];

		$condition = 'AND login_idLogin LIKE "'.$idLogin .'"';
		$userData    =    $db->getAllRecords('pessoa','*',$condition,'');
		if(count($userData)>0){
		  $s    =    '';
		  foreach($userData as $pessoa){
			$s++;
			}

			$NomeMedico = $pessoa['nome'];
		}else{

		}

    }elseif($_SESSION['privilegio'] == 'admim')
             $NomeMedico = 'Administrador';


if( !empty($_SESSION['clinica'])){
	if($_SESSION['privilegio'] == 'paciente'){
                echo 'medico';
                //header("location: calendario.php");
	}elseif($_SESSION['privilegio'] == 'medico' || "admim"){
		
	}
	
	
}
/*Deligando por quanto
if( empty($_SESSION['clinica']) == false ){
	if($_SESSION['privilegio'] == 'paciente'){
		header("location: calendario.php");
	}elseif($_SESSION['privilegio'] == 'medico'){	
	}
}
*/    
/* PARTE DO RENAN, NAO MEXA
        $userData    =    $db->getAllRecords('login','*',"",'');
        $quantidade = $db->getQueryCount('login', 'idLogin','');  
		if(count($quantidade)>0){
		  $s    =    '';
		  foreach($quantidade as $qtd){
			$s++;
            }
          echo $quantidePaciente = $qtd['total'];
          }
            $i = 0;
          for($i=1; $i++; $i== $quantidePaciente){
            $condition = 'AND idLogin LIKE "'.$i .'"';
            $userData    =    $db->getAllRecords('login','*',"",'AND idLogin LIKE "'.$i.'"');
            if(count($userData)>0){
                foreach($userData as $valorID){
                    $s++;
                    }
            }
          }
*/
?>


<!DOCTYPE html>
<html lang=”pt-br”>

<head>
    <title>Área Médico</title>
    <link href="../css/estlioPaginaPrincipal.css" rel="stylesheet"/>
</head>

<body>
<nav class="navbar  navbar-expand-lg navbar-dark bg-primary border rounded p-2 mb-2">
  <a class="navbar-brand" href="../index2.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="ListarPaciente.php">Pacientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active"  href="../index.php"> Calendário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#avaliacao">Avaliações</a>
                    </li>
                   
                </ul>
                
                <ul class="navbar-nav ml-auto">
                    <?php
                        if($_SESSION['privilegio'] == 'admim'){
                            ?>
                                <li class="nav-item ">
                                  <a href="Admin.php" class="btn btn-success navbar-brand"> Adminstração </a>
                                 </li>
                            <?php
                        }

                    ?>


                    <li class="nav-item ml-auto">
                        <button class="btn btn-outline-secondary navbar-brand">Olá! Dr <?php echo $NomeMedico ;?> </button>
                    </li>
                    <li class="nav-item ml-auto">
		                <a class="btn btn-danger navbar-brand" href="../controller/DesfazerLogin.php" > Sair </a>
		            </li>
                </ul>
                
  </div>
</nav>
        <script type='text/javascript'>// <!-- nao apagar, precisa para funcionar o botão IMPRIMIR -->
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


        <?php
            /*Teste da Banco da Listagem
            $dadosapegar.='pessoa.cpf,pessoa.nome,';
            $dadosapegar.='endereco.rua,endereco.numero,endereco.cidade,endereco.estado,';
            $dadosapegar.='pessoa.cpf,pessoa.nome,';
            $dadosapegar.='telefone.tel1,telefone.cel1,';
            $dadosapegar.='paciente.tipoSanguineo,paciente.sexo,paciente.dataNacimento';
            */
            /*
            $condition .= ' AND pessoa.endereco_idEndereco LIKE endereco.idEndereco'; //identifica em pessoa quem tem aquele endereco
            $condition .= ' AND pessoa.telefone_idTelefone LIKE telefone.idTelefone'; //identifica em pessoa quem tem aquele telefone
            $condition .= ' AND paciente.pessoa_idPessoa LIKE pessoa.idPessoa'; //identifica em paciente quem tem aquele idPessoa
            
            $condition .= ' AND pessoa.endereco_idEndereco = endereco.idEndereco'; //identifica em pessoa quem tem aquele endereco
            $condition .= ' AND pessoa.telefone_idTelefone = telefone.idTelefone'; //identifica em pessoa quem tem aquele telefone
            $condition .= ' AND paciente.pessoa_idPessoa = pessoa.idPessoa';
            $userData	=	$db->getAllRecords2('escola, modalidadeensino',
		  'escola.NomeEscola, escola.idEscola, modalidadeensino.NomeModalidadeEnsino, modalidadeensino.idModalidadeEnsino',
		  'escola.ModalidaEnsino_idModalidadeEnsino = modalidadeensino.idModalidadeEnsino','ORDER BY idEscola DESC');
            */
           
            $userData= $db->getAllRecords2('pessoa, endereco, telefone, paciente','*','pessoa.endereco_idEndereco = endereco.idEndereco and pessoa.telefone_idTelefone = telefone.idTelefone and pessoa.idPessoa = paciente.pessoa_idPessoa'); //puxa todos os dados daquela pessoa
                
            //print "<br>SELECT $fields FROM $tableName WHERE 1 ".$cond." ".$orderBy." ".$limit;
            /*
                $userDataPessoa = $db->getAllRecords2('idPessoa,cpf,nome,endereco_idEndereco,telefone_idTelefone','pessoa');
                $userDataEndereco=$db->getAllRecords2('idEndereco,rua,numero,cidade,estado','endereco');
                $userDataTelefone=$db->getAllRecords2('idTelefone,tel1,cel1','telefone');
                $userDataPaciente=$db->getAllRecords2('idPaciente,tipoSanguineo,sexo,dataNacimento,pessoa_idPessoa','paciente');
            */
        ?>
        <div class="container form-group tab-pane active" id = "pacientes">
        <h2>Filtro de Pesquisa:</h2>
        <p>
        *Digite algo no campo de entrada para pesquisar: nome, cpf, sexo, tipo sanguineo, cidade, bairro, etc...</p>
        <input class="form-control" id="myInput" type="text" placeholder="Digite aqui para pesquisar...">
        <br>
        <div id='main-content'> <!-- nao apagar, precisa para funcionar o botão IMPRIMIR , lembrar de fechar DIV no final antes da DIV do container-->
            <div class="header clearfix">

                <h3 class="text-muted">Listagem de Pacientes</h3>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive" >
                            <table class="table cabecalho table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th class="cabecalho">Nome Completo</th>
                                            <th class="cabecalho">Sexo</th>
                                            <th class="cabecalho">Data De Nacimento</th>
                                            <th class="cabecalho">CPF</th>
                                            <th class="cabecalho">Tipo Sanguineo</th>
                                            <th class="cabecalho">Telefone</th>
                                            <th class="cabecalho">Celular Principal</th>
                                            <th class="cabecalho">Rua</th>
                                            <th class="cabecalho">Número</th>
                                            <th class="cabecalho">Cidade</th>
                                            <th class="cabecalho">Estado</th>
                                        </tr>
                                    </thead>



                                        <tbody id="myTable">  <!--importante: <tbody id="myTable"> faz a PESQUISA  -->
                                            <?php 
                                                if(count($userData)>0){
                                                    $s	=	'';
                                                    foreach($userData as $val){
                                                    $s++;
                                            ?>
                                                <tr>
                                                <td><?php echo $val['nome']; ?></td>
                                                    <td><?php echo $val['sexo']; ?></td>
                                                    <td><?php echo $val['dataNascimento'];?></td>
                                                    <td><?php echo $val['cpf'];?></td>
                                                    <td><?php echo $val['tipoSanguineo'];?></td>
                                                    <td><?php echo $val['tel1'];?></td>
                                                    <td><?php echo $val['cel1'];?></td>
                                                    <td><?php echo $val['rua'];?></td>
                                                    <td><?php echo $val['numero'];?></td>
                                                    <td><?php echo $val['cidade'];?></td>
                                                    <td><?php echo $val['estado'];?></td>
                        
                                                <!---
                                                    <td><?php// echo $PessoaNome; ?></td>
                                                    <td><?php// echo $PacienteSexo; ?></td>
                                                    <td><?php// echo $PacienteDataNascimento?></td>
                                                    <td><?php// echo $PessoaCpf?></td>
                                                    <td><?php// echo $PacienteTipoSanguineo?></td>
                                                    <td><?php// echo $TelefoneTel1?></td>
                                                    <td><?php// echo $TelefoneCel1?></td>
                                                    <td><?php// echo $EnderecoRua?></td>
                                                    <td><?php// echo $EnderecoNumero?></td>
                                                    <td><?php// echo $EnderecoCidade?></td>
                                                    <td><?php// echo $EnderecoEstado?></td>
                                                  -->      
                                                </tr>
                                                <?php 
                                                        }
                                                    }else{}
                                                ?>
                                        </tbody>

                                        
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p>Visualize as informações da sua pesquisa logo acima.</p>
            <form> <!-- nao apagar, precisa para funcionar o botão IMPRIMIR -->
            <input onclick="javascript:void(printContent());" type="button" value="Imprimir" class="btn btn-info" />
            </form> <!-- nao apagar, precisa para funcionar o botão IMPRIMIR -->
        </div>
        <script>// <!-- nao apagar, precisa para funcionar a PESQUISA -->
        $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        });/***faz a pesquisa no conteudo***/
        </script>  <!-- nao apagar, precisa para funcionar a PESQUISA -->

        <br>

                <div id="footer">
                    <a href="#top" class="topo">Ir para o topo</a>
                </div>
                <br>
        		</div>


        




    </body>
</html>
