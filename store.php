<?php 
    #salvo la variabile con la nuova task
    $new_toDo = [
       "text" => $_POST['toDo'],
       "done" => "false"
    ];

    #prendo i dati dal file json
    $db_json = file_get_contents("/db.json");
    #li decodifico per php
    $toDos_php = json_decode($db_json,true);

    #pusho la nuova task nell'array php    
    $toDos_php[] = $new_toDo;

    #codifico l'array e lo mando al file json
    $toDos_json = json_encode($toDos_php);
    file_put_contents('db.json',$toDos_json);


    header('Content-Type: application/json');
    echo json_encode($new_toDo);
?>