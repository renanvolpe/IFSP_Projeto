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



  <title>Marcar Consulta</title>
</head>
<body>
<br>
<div class="container">
<h2>Filtro de Pesquisa:</h2>
  <p>
 *Digite algo no campo de entrada para pesquisar: descrição...</p>
  <input class="form-control" id="myInput" type="text" placeholder="Digite aqui para pesquisar...">
  <br>
<div class="container">
    <div class="header clearfix">
        <h3 class="text-muted">Consultas Agendadas</h3>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table cabecalho table-striped" >
                            <thead>
                                <tr>
                                    <th class="cabecalho">Id</th>
                                    <th class="cabecalho">Data da Consulta</th>
                                    <th class="cabecalho">Hora da Consulta</th>
                                    <th class="cabecalho">Valor R$</th>
                                    <th class="cabecalho">Paciente</th>
                                    <th class="cabecalho">Médico</th>
                                    <th class="cabecalho">Especialidade</th>
                                    <th class="cabecalho">Observações</th>
                                    <th class="cabecalho">Excluir</th>
                                    <th class="cabecalho">Editar</th>
                                </tr>
                            </thead>

                                <tbody id="myTable">  <!--importante: <tbody id="myTable"> faz a PESQUISA  -->
                                    <tr>
                                        <td>1</td>
                                        <td>2019-01-15</td>
                                        <td>16:00:00</td>
                                        <td>67.00</td>
                                        <td>Ana Paula Espindola Palermo</td>
                                        <td>Drauzio Varela</td>
                                        <td>Cardiologia</td>
                                        <td>Paciente medicado!</td>
										<td><a href="javascript:void(null);" onclick="msgConfirmaDeleteConsulta(2)" class="btn btn-danger" href="excluir_consulta.php?id=1">Excluir</a></td>
                                        <td><a aria-current="page" href="NavMarcarConstulta.php" class="btn btn-primary" alt="editar">Editar</a></td>
                                    </tr>
                                </tbody>
                                <tbody id="myTable">  <!--importante: <tbody id="myTable"> faz a PESQUISA  -->
                                    <tr>
                                        <td>2</td>
                                        <td>2019-01-12</td>
                                        <td>15:00:00</td>
                                        <td>100.00</td>
                                        <td>Albert Ferraz</td>
                                        <td>Antonio Vilela</td>
                                        <td>Ortopedista</td>
                                        <td>Paciente em Atendimento!</td>
										<td><a href="javascript:void(null);" onclick="msgConfirmaDeleteConsulta(2)" class="btn btn-danger" href="excluir_consulta.php?id=1">Excluir</a></td>
                                        <td><a aria-current="page" href="NavMarcarConstulta.php" class="btn btn-primary" alt="editar">Editar</a></td>
                                    </tr>
                                </tbody>                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

	 <p>Visualize as informações da sua pesquisa logo acima.</p>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});/***faz a pesquisa no conteudo***/
</script>

</body>
</html>
