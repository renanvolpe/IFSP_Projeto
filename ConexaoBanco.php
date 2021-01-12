    <?php
    $servername = "localhost";
    $database = "clinicamedica";
    $username = "root";
    $password = "";
    // Create connection
   
      
  
    
$link = mysqli_connect("$servername", "$username", "$password", "$database");
 
if (!$link) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
 

 
mysqli_close($link);
?> 
    