<?php 
require "../Model/crud_estado.php";

function buscarEstado(){
    $estado = getEstados();
    return $estado;
}
function colocarEstado(){
    $estado = postEstados();
    return $estado;
}
function alterarEstado(){
    $estado = putEstados();
    return $estado;
}
function deletarEstado(){
    $estado = deleteEstados();
    return $estado;
}