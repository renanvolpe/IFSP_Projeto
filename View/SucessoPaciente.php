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