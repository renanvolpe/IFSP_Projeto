<?php
session_start();

include_once '../conexao.php';

$idAgenda = filter_input(INPUT_GET, 'idAgenda', FILTER_SANITIZE_NUMBER_INT);

if (!empty($idAgenda)) {
    $query_event = "DELETE FROM agenda WHERE idAgenda=:idAgenda";
    $delete_event = $conn->prepare($query_event);
    
    $delete_event->bindParam("idAgenda", $idAgenda);
    
    if($delete_event->execute()){
        $_SESSION['msg'] = '<div class="alert alert-success" role="alert">O evento foi apagado com sucesso!</div>';
        header("Location: ../View/calendario.php");
    }else{
        $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Erro: O evento não foi apagado com sucesso!</div>';
        header("Location: ../View/calendario.php");
    }
} else {
    $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Erro: O evento não foi apagado com sucesso!</div>';
    header("Location: ../View/calendario.php");
}
