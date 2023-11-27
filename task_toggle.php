<?php 
    #salvo la variabile con il valore della task
    $value = $_POST['taskDone'];
    #salvo la variabile con l'indice selezionato
    $index = $_POST['index'];


    #prendo i dati dal file json
    $db_json = file_get_contents("./db.json");
    #li decodifico per php
    $toDos_php = json_decode($db_json,true);

    #riassegno il valore della task
    $toDos_php[$index]["done"] = !$toDos_php[$index]["done"];
    

    #codifico l'array e lo mando al file json
    $toDos_json = json_encode($toDos_php);
    file_put_contents('db.json',$toDos_json);


    header('Content-Type: application/json');
?>