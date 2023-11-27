<?php 
$db_json = file_get_contents("./db.json");
$toDos = json_decode($db_json,true);

$response = [
    'success' => true,
    'result' => $toDos,
];

header('Content-Type: application/json');
echo json_encode($response);
?>