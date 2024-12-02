<?php
require "../Model/crud_pessoa.php";

function buscarPessoa()
{
    $pessoa = getPessoas();
    return $pessoa;
}
function buscarCidadeParam($dados)
{
    $pessoa = getPessoasParam($dados['nome_pessoa']);
    return $pessoa;
}
if (isset($_GET['get_pessoa'])) {
    $dados['nome_pessoa'] = $_GET['nome_pessoa'];
    buscarCidadeParam($dados);
    echo json_encode(["Pessoas existentes -> " => $dados]);
}
function colocarPessoa($dados)
{
    $pessoa = postPessoas($dados['nome_pessoa'], $dados['idade'], $dados['cidade_id']);
    return $pessoa;
}
if (isset($_POST['insert_pessoa'])) {
    $dados['nome_pessoa'] = $_POST['nome_pessoa'];
    $dados['idade'] = $_POST['idade_pessoa'];
    $dados['cidade_id'] = $_POST['cidade_id'];
    colocarPessoa($dados);
    echo json_encode($dados);
}
function alterarPessoa($dados)
{
    $pessoa = putPessoas($dados['nome_pessoa'], $dados['pessoa_nova'], $dados['cidade_id_antigo'], $dados['cidade_id_novo']);
    return $pessoa;
}
if (isset($_POST['put_pessoa'])) {
    $dados['nome_pessoa'] = $_POST['nome_antigo_pessoa'];
    $dados['pessoa_nova'] = $_POST['nome_novo_pessoa'];
    $dados['cidade_id_antigo'] = $_POST['cidade_id_antigo_pessoa'];
    $dados['cidade_id_novo'] = $_POST['cidade_id_novo_pessoa'];
    alterarPessoa($dados);
    echo json_encode($dados);
}
function deletarPessoa($dados)
{
    $nome_pessoa = deletePessoas($dados['nome_pessoa']);
    return $nome_pessoa;
}
if (isset($_POST['delete_pessoa'])) {
    $dados['nome_pessoa'] = $_POST['nome_pessoa'];
    deletarPessoa($dados);
    echo json_encode($dados);
}
