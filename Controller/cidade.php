<?php 
require "../Model/crud_cidade.php";

function buscarCidade(){
    $cidade = getCidades();
    return $cidade;
}
function colocarCidade($dados){
    $cidade = postCidades($dados['nome_cidade'], $dados['id']);
    return $cidade;
}
function alterarCidade($dados){
    $cidade = putCidades($dados['nome_cidade'], $dados['cidade_nova']);
    return $cidade;
}
function deletarcidade($dados){
    $cidade = deleteCidades($dados['nome_cidade']);
    return $cidade;
}