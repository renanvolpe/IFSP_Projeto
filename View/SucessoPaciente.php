<?php
session_start();

if( empty($_SESSION['clinica']) == false ){
	if($_SESSION['privilegio'] == 'medico'){
		header("location: calendarioMedico.php");
	}elseif($_SESSION['privilegio'] == 'paciente'){
        
    }
	
	
}
?>
<!DOCTYPE html>

<html>
<head>
<?php
    include '../ChamarBoostrap.php';
    include 'NavPaciente.php';
 ?>
  <title>SUCESSO</title>
</head>
<body>
        <div class="" style="margin: 200px;">
        <?php
        if(isset($_REQUEST['msg']) and $_REQUEST['msg']=="up1"){
                echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> &nbsp Dados do paciente atualizados com sucesso! </div>';
        }elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="up2"){
                echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> &nbsp Dados de endereco atualizados com sucesso! </div>';
        }elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="up3"){
                echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> &nbsp Dados de telefone atualizados com sucesso! </div>';
        }elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="up12"){
                echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> &nbsp Dados do paciente e endereco atualizados com sucesso! </div>';
        }elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="up123"){
                echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> &nbsp Dados do paciente, endereco e telefone atualizados com sucesso! </div>';
        }elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="up13"){
                echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> &nbsp Dados do paciente e telefone atualizados com sucesso! </div>';
        }elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="up23"){
                echo	'<div class="alert alert-success"><i class="fa fa-thumbs-up"></i> &nbsp Dados de endereco e telefone atualizados com sucesso! </div>';
        }elseif(isset($_REQUEST['msg']) and $_REQUEST['msg']=="up0"){
                echo	'<div class="alert alert-dark"><i class="fa fa-exclamation-triangle"></i> &nbsp Parece que nenhum dado foi alterado! </div>';
        }
        ?>
                <div class="jumbotron">
                <h1 class="display-4">Cadastro realizado com Sucesso!</h1>
                        <p class="lead">Aguardaremos você em nossa clínica.</p>
                        <hr class="my-4">
                        <p>Afredecemos a preferência.</p>
                        <p class="lead">
                        <a class="btn btn-primary btn-lg" href="../controller/DesfazerLogin.php" role="button">Voltar para Tela incial</a>
                </p>
                </div>
        </div>
</body>
</html>