<?php
session_start();

if( !empty($_SESSION['clinica']) ){
	if(isset($_SESSION['privilegio']) && $_SESSION['privilegio'] == 'paciente'){
            //echo 'paciente';
		
		header("location: ../index.php");
	}elseif(isset($_SESSION['privilegio']) && $_SESSION['privilegio'] == 'medico'){
            //echo 'medico';
            //header("location: calendarioMedico.php");
		header("location: ../index.php");
            
	}elseif(isset($_SESSION['privilegio']) && $_SESSION['privilegio'] == 'admim'){
            
            
	}
}else{
		header("location: index2.php?msg=semLogin");

}

    include '../ChamarBoostrap.php';
    
 
?>

<div class="jumbotron" style="padding:200px 150px; ">
<h1 class="display-4 text-center">Essa é a tela do administrador</h1>
        <hr class="my-8">

        <div class="container">
            <div class="row">
                    <div class="col-md-6 text-center">
                             <p class="lead ">Aqui você será guiado para o Médico</p>
                             <a class="btn btn-warning btn-lg " href="../index.php?msg=medic" role="button">Médico</a>
                    </div>

                    <div class="col-md-6 text-center">
                          <p class="lead ">Aqui você será guiado para o Paciente</p>
                          <a class="btn btn-success btn-lg " href="../index.php?msg=paci" role="button">Paciente</a>
                    
                    </div>
                    
                
            </div>
            <hr class="my-8">
            
                    

                    <div class=" text-center">
                          <p class="lead ">Sair do sistema</p>
                          <a class="btn btn-danger btn-lg " href="../controller/DesfazerLogin.php" role="button">Sair do WebSite</a>
                    
                    </div>
                    
                
            
        
        
        
        

</div>




