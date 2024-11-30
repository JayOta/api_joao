<?php
require "../Controller/pessoa.php";

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo buscarPessoa();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dados = json_decode(file_get_contents('php://input'), true);
    $pessoa = colocarPessoa($dados);
    echo json_encode($pessoa);
}
if ($_SERVER["REQUEST_METHOD"] == "PUT") {
    $dados = json_decode(file_get_contents('php://input'), true);
    $pessoa = alterarPessoa($dados);
    echo json_encode($pessoa);
}
if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    $dados = json_decode(file_get_contents('php://input'), true);
    $pessoa = deletarPessoa($dados);
    echo deletarPessoa($dados);
}
