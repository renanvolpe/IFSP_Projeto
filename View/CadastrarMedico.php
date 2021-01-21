<?php

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
?>


<!DOCTYPE html>
<html lang=”pt-br”>

<head>
    <title>Área Médico</title>
    <link href="../css/estlioPaginaPrincipal.css" rel="stylesheet"/>
</head>

<body>
<nav class="navbar  navbar-expand-lg navbar-dark bg-primary border rounded p-2 mb-2">
  <a class="navbar-brand" href="../index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="ListarPaciente.php">Pacientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active"  href="index.php"> Calendário</a>
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
    <!-- começa o código com tabela de clientes cadastrados e campo de pesquisa e filtragem -->
    <div class="container">
        <div class="header clearfix">
            <h3 class="text-muted">Sr. Médico, cadastre seus dados!</h3>
        </div>
        <!-- inserir $privilegio="administrador"; para adicionar automaticamente no banco ao realizar cadastro-->

        <form action="index.php?pagina=incluir_medico.php" method="post">
            <div class="container border rounded border-dark p-3 mb-2 bg-white text-dark ">
                <!-- nome input -->
                <div class="col-sm-12">
                    <div class="form-outline">
                        <label class="form-group">Nome:
                            <input maxlength="40" type="text" name="nome" class="form-control" placeholder="Máximo 40 caracteres..." required></label>

                        <!-- crm input -->
                        <label class="form-group">CRM:
                            <input maxlength="8" id="crm" type="text" name="crm" class="form-control" placeholder="Máx. 10 caracacteres..." required> </label>

                        <!-- especialidade input -->
                        <label class="form-group">Especialidade:
                            <select id="especialidade" name="especialidade" class="form-control" placeholder="Especialidade..." required>
                                <option value="">-Selecione-</option>
                                <option value="1">Odontologia</option>
                                <option value="2">Pediatria</option>
                                <option value="3">Cardiologia</option>
                                <option value="4">Dermatologia</option>
                                <option value="5">Radiologia</option>
                                <option value="6">Cirurgia Plastica</option>
                                <option value="7">Hematologia</option>
                                <option value="8">Oncologia</option>
                                <option value="11">adad</option>
                            </select></label>

                        <!-- data nascimento input -->
                        <label class="form-group">Data Nascimento:
                            <input type="date" name="dataNascimento" class="form-control" required></label>
                        <button style="width: 185p; margin-left: 73px;" type="submit" class="btn btn-success">Salvar</button>
                    </div>
        </form>
    </div>
    </div>
    <h1>Pesquisa e edição dos cadastro:</h1>
    <div class="row">
        <p>
            *Digite algo no campo de entrada para pesquisar: nomes, especialidade, crm, data de nascimento...</p>
        <input class="form-control" id="myInput" type="text" placeholder="Digite aqui para pesquisar...">
        <br>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table cabecalho table-striped">
                            <thead>
                                <tr>
                                    <th class="cabecalho">Id</th>
                                    <th class="cabecalho">Nome</th>
                                    <th class="cabecalho">Especialidade</th>
                                    <th class="cabecalho">CRM</th>
                                    <th class="cabecalho">Data de Nascimento</th>
                                    <th class="cabecalho">Excluir</th>
                                    <th class="cabecalho">Editar</th>
                                </tr>
                            </thead>

                            <tbody id="myTable">
                                <!--importante: <tbody id="myTable"> faz a PESQUISA  -->
                                <tr>
                                    <td>1</td>
                                    <td>Pedro Henrique de Souza</td>
                                    <td>Radiologia</td>
                                    <td>95624725</td>
                                    <td>1985-09-16</td>
                                    <td><a href="javascript:void(null);" onclick="msgConfirmaDeleteMedico(1)" class="btn btn-danger" href="excluir_medico.php?id=1">Excluir</a></td>
                                    <td><a aria-current="page" href="CadastrarMedico.php"" class=" btn btn-primary">Editar</a></td>
                                </tr>
                            </tbody>
                            <tbody id="myTable">
                                <!--importante: <tbody id="myTable"> faz a PESQUISA  -->
                                <tr>
                                    <td>2</td>
                                    <td>Paula Henrique dos Santos</td>
                                    <td>Pediatra</td>
                                    <td>95434725</td>
                                    <td>1981-09-12</td>
                                    <td><a href="javascript:void(null);" onclick="msgConfirmaDeleteMedico(1)" class="btn btn-danger" href="excluir_medico.php?id=1">Excluir</a></td>
                                    <td><a aria-current="page" href="CadastrarMedico.php" class=" btn btn-primary">Editar</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <p>Visualize as informações da sua pesquisa logo acima.</p>

        <script>
            $(document).ready(function() {
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            }); /***faz a pesquisa no conteudo***/
        </script>
<!-- fim o código com tabela de clientes cadastrados e campo de pesquisa e filtragem -->
