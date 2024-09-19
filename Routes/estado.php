<?php 
require "../Controller/estado.php";

header("Content-Type: application/json");

if($_SERVER["REQUEST_METHOD"] == "GET"){
    echo buscarEstado();
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $dados = json_decode(file_get_contents('php://input'), true);
    $estado = colocarEstado($dados);
    echo json_encode($estado);
}
if($_SERVER["REQUEST_METHOD"] == "PUT"){
    $dados = json_decode(file_get_contents('php://input'), true);
    $estado = alterarEstado($dados);
    echo json_encode($estado);
}
if($_SERVER["REQUEST_METHOD"] == "DELETE"){
    $dados = json_decode(file_get_contents('php://input'), true);
    $estado = deletarEstado($dados);
    echo deletarEstado($dados);
}
