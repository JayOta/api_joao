<?php 
require "../Model/crud_cidade.php";

function buscarCidade(){
    $cidade = getCidades();
    return $cidade;
}
function colocarCidade(){
    $cidade = postCidades();
    return $cidade;
}
function alterarCidade(){
    $cidade = putCidades();
    return $cidade;
}
function deletarcidade(){
    $cidade = deleteCidades();
    return $cidade;
}