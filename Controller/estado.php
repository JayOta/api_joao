<?php
require "../Model/crud_estado.php";

function buscarEstado()
{
    $estado = getEstados();
    return $estado;
}
function buscarEstadoParam($dados)
{
    $estado = getEstadosParam($dados['nome_estado']);
    return $estado;
}
if (isset($_GET['get_estado'])) {
    $dados['nome_estado'] = $_GET['nome_estado'];
    buscarEstadoParam($dados);
    echo json_encode(["Estados existentes -> " => $dados]);
}
function colocarEstado($dados)
{
    $estado = postEstados($dados['nome_estado'], $dados['sigla_estado']);
    return $estado;
}
if (isset($_POST['insert_estado'])) {
    $dados['nome_estado'] = $_POST['nome_estado'];
    $dados['sigla_estado'] = $_POST['sigla_estado'];
    colocarEstado($dados);
    echo json_encode($dados);
}
function alterarEstado($dados)
{
    $estado = putEstados($dados['nome_estado'], $dados['estado_novo'], $dados['sigla_antiga_estado'], $dados['sigla_nova_estado']);
    return $estado;
}
if (isset($_POST['put_estado'])) {
    $dados['nome_estado'] = $_POST['nome_antigo_estado'];
    $dados['estado_novo'] = $_POST['nome_novo_estado'];
    $dados['sigla_antiga_estado'] = $_POST['sigla_antiga_estado'];
    $dados['sigla_nova_estado'] = $_POST['sigla_nova_estado'];
    alterarEstado($dados);
    echo json_encode($dados);
}
function deletarEstado($dados)
{
    $nome_estado = deleteEstados($dados['nome_estado']);
    return $nome_estado;
}
if (isset($_POST['delete_estado'])) {
    $dados['nome_estado'] = $_POST['nome_estado'];
    deletarEstado($dados);
    echo json_encode($dados);
}
