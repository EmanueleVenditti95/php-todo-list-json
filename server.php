<?php 
$todos = ['A','B','C','D'];

header('Content-Type: application/json');
echo json_encode($todos);
?>