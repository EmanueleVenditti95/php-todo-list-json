<?php 
    $new_toDo = $_POST['toDo'] ?? '';

    header('Content-Type: application/json');
    echo json_encode($new_toDo);
?>