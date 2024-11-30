<?php
require "../Model/crud_cidade.php";

function buscarCidade()
{
    $cidade = getCidades();
    return $cidade;
}
function buscarCidadeParam($dados)
{
    $cidade = getCidadesParam($dados['nome_cidade']);
    return $cidade;
}
if (isset($_GET['get_cidade'])) {
    $dados['nome_cidade'] = $_GET['nome_cidade'];
    buscarCidadeParam($dados);
    echo json_encode(["Cidades selecionadas ->" => $dados]);
}
function colocarCidade($dados)
{
    $cidade = postCidades($dados['nome_cidade'], $dados['id']);
    return $cidade;
}
if (isset($_POST['insert_cidade'])) {
    $dados['nome_cidade'] = $_POST['nome_cidade'];
    $dados['id'] = $_POST['id_estado'];
    colocarCidade($dados);
    echo json_encode($dados);
}
function alterarCidade($dados)
{
    $cidade = putCidades($dados['nome_cidade'], $dados['cidade_nova']);
    return $cidade;
}
if (isset($_POST['put_cidade'])) {
    $dados['nome_cidade'] = $_POST['nome_antigo_cidade'];
    $dados['cidade_nova'] = $_POST['nome_novo_cidade'];
    alterarCidade($dados);
    echo json_encode($dados);
}
function deletarCidade($dados)
{
    $cidade = deleteCidades($dados['nome_cidade']);
    return $cidade;
}
if (isset($_POST['delete_cidade'])) {
    $dados['nome_cidade'] = $_POST['nome_cidade'];
    deletarCidade($dados);
    echo json_encode($dados);
}
