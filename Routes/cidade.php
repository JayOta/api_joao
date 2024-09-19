<?php 
require "../Controller/cidade.php";

header("Content-Type: application/json");

if($_SERVER["REQUEST_METHOD"] == "GET"){
    echo buscarCidade();
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $dados = json_decode(file_get_contents('php://input'), true); // Arrumando..
    $cidade = colocarCidade($dados);
    echo json_encode($cidade);
}
if($_SERVER["REQUEST_METHOD"] == "PUT"){
    $dados = json_decode(file_get_contents('php://input'), true);
    $cidade = alterarCidade($dados);
    echo json_encode($cidade);
}
if($_SERVER["REQUEST_METHOD"] == "DELETE"){
    $dados = json_decode(file_get_contents('php://input'), true);
    $estado = deletarEstado($dados);
    echo deletarCidade($dados);
}