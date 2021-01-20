<?php
session_start();

if( empty($_SESSION['clinica']) == false ){
	if($_SESSION['privilegio'] == 'paciente'){
		header("location: calendario.php");
	}elseif($_SESSION['privilegio'] == 'medico'){
		
	}
	
	
}

include 'NavMedico.php';
include '../ChamarBoostrap.php';
?>

<?php

        
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
<html>
    <head>
    <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
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
</head>
<body>


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
                                            <th class="cabecalho">Id</th>
                                            <th class="cabecalho">Nome Completo</th>
                                            <th class="cabecalho">Tipo Sanguineo</th>
                                            <th class="cabecalho">Telefone</th>
                                            <th class="cabecalho">Celular Principal</th>
                                            <th class="cabecalho">Celular Secundário</th>
                                            <th class="cabecalho">CPF</th>
                                            <th class="cabecalho">Data Nascimento</th>
                                            <th class="cabecalho">Sexo</th>
                                            <th class="cabecalho">Rua</th>
                                            <th class="cabecalho">Número</th>
                                            <th class="cabecalho">Estado</th>
                                            <th class="cabecalho">Bairro</th>
                                            <th class="cabecalho">CEP</th>
                                            <th class="cabecalho">Cidade</th>
                                            <th class="cabecalho">Complemento</th>
                                        </tr>
                                    </thead>


                                        <tbody id="myTable">  <!--importante: <tbody id="myTable"> faz a PESQUISA  -->
                                            <tr>
                                                <td>1</td>
                                                <td>Amanda Espindola Palermo</td>
                                                <td>B-</td>
                                                <td>(61) 9 8647-3913</td>
                                                <td>(61) 9 8647-3913</td>
                                                <td>(61) 9 8647-3913</td>
                                                <td>045.448.379-10</td>
                                                <td>1985-09-16</td>
                                                <td>Feminino</td></td>
                                                <td>Rua Especial</td>
                                                <td>178</td>
                                                <td>SP</td>
                                                <td>Centro</td>
                                                <td>12430-000</td>
                                                <td>Jacareí</td>
                                                <td> Ed. Bello Oeste Lotes 01/03 - Apto. 415 </td>
                                            </tr>
                                            </tbody>

                                        <tbody id="myTable">  <!--importante: <tbody id="myTable"> faz a PESQUISA  -->
                                        <tr>
                                                <td>2</td>
                                                <td>Gustava Guanabara</td>
                                                <td>O-</td>
                                                <td>(61) 9 8647-3913</td>
                                                <td>(61) 9 8654-3913</td>
                                                <td>(61) 9 8657-3913</td>
                                                <td>044.448.449-10</td>
                                                <td>1985-09-16</td>
                                                <td>Masculino</td>
                                                <td>Rua de Baixo</td>
                                                <td>78</td>
                                                <td>RJ</td>
                                                <td>Bairro Poço Fundo</td>
                                                <td>12430-000</td>
                                                <td>Rio de Janeiro</td>
                                                <td> 01/03 - Apto. 4 </td>

                                            </tr>
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
