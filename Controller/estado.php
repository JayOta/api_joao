<?php 
require "../Model/crud_estado.php";

function buscarEstado(){
    $estado = getEstados();
    return $estado;
}
function colocarEstado($dados){
    $estado = postEstados($dados['nome_estado'], $dados['sigla_estado']);
    return $estado;
}
function alterarEstado($dados){
    $estado = putEstados($dados['nome_estado'], $dados['estado_novo']);
    return $estado;
}
function deletarEstado($dados){
    $nome_estado = deleteEstados($dados['nome_estado']);
    return $nome_estado;
}