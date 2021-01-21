<?php

include '../conexao.php';

$query_events = "SELECT idAgenda, title, color, start, end, paciente_idPaciente, medico_idMedico FROM agenda";
$resultado_events = $conn->prepare($query_events);
$resultado_events->execute();

$eventos = [];

while($row_events = $resultado_events->fetch(PDO::FETCH_ASSOC)){
    $idAgenda = $row_events['idAgenda'];
    $title = $row_events['title'];
    $color = $row_events['color'];
    $start = $row_events['start'];
    $end = $row_events['end'];
    $paciente_idPaciente = $row_events['paciente_idPaciente'];
    $medico_idMedico = $row_events['medico_idMedico'];
    
    $eventos[] = [
        'idAgenda' => $idAgenda, 
        'title' => $title, 
        'color' => $color, 
        'start' => $start, 
        'end' => $end, 
        'paciente_idPaciente' => $paciente_idPaciente, 
        'medico_idMedico' => $medico_idMedico, 
        ];
}

echo json_encode($eventos);