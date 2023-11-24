<?php 
    $new_toDo = $_POST['new_toDo'];

    header('Content-Type: application/json');
    echo json_encode($new_toDo);
?>