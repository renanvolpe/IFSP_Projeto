<?php
session_start();

    include '../ChamarBoostrap.php';
    
 
?>

<div class="jumbotron" style="padding:200px 150px; ">
<h1 class="display-4 text-center">Essa é a tela do administrador</h1>
        <hr class="my-8">

        <div class="container">
            <div class="row">
                    <div class="col-md-6 text-center">
                             <p class="lead ">Aqui você será guiado para o Médico</p>
                             <a class="btn btn-warning btn-lg " href="calendarioMedico.php" role="button">Médico</a>
                    </div>

                    <div class="col-md-6 text-center">
                          <p class="lead ">Aqui você será guiado para o Paciente</p>
                          <a class="btn btn-success btn-lg " href="calendario.php" role="button">Paciente</a>
                    
                    </div>
                    
                
            </div>
            <hr class="my-8">
            
                    

                    <div class=" text-center">
                          <p class="lead ">Aqui você será guiado para o Paciente</p>
                          <a class="btn btn-danger btn-lg " href="../controller/DesfazerLogin.php" role="button">Sair do WebSite</a>
                    
                    </div>
                    
                
            
        
        
        
        

</div>




