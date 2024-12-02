<?php
require '../Service/conexao.php';

function getPessoas()
{
    global $conn;

    $stmt = $conn->prepare("SELECT * FROM pessoa");
    $stmt->execute();
    $pessoa = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return json_encode($pessoa);
}
function getPessoasParam($nome_pessoa)
{
    global $conn;

    $stmt = $conn->prepare("SELECT * FROM `pessoa` WHERE nome_pessoa = '$nome_pessoa'");
    $stmt->execute();
    $pessoa = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return json_encode($pessoa);
}
function postPessoas($nome_pessoa, $idade, $cidade_id)
{
    global $conn;

    $stmt = $conn->prepare("INSERT INTO `pessoa`(`nome_pessoa`, `idade`, `cidade_id`) VALUES (\"$nome_pessoa\", \"$idade\", \"$cidade_id\")");
    $stmt->execute();
    $id = $conn->lastInsertId();
    return json_encode(["Pessoa adicionada" => $nome_pessoa, "Idade" => $idade, "id" => $id]);
}
function putPessoas($nome_pessoa, $pessoa_nova, $cidade_id_antigo, $cidade_id_novo) // Colocar Função para editar a idade e a cidade
{
    global $conn;
    $pessoa_antiga = $nome_pessoa;
    $stmt = $conn->prepare("UPDATE `pessoa` SET nome_pessoa = :novoNome, cidade_id = :cidadeIdNovo WHERE nome_pessoa = :nomeAntigo AND cidade_id = :cidadeIdAntigo");
    $stmt->bindParam(':novoNome', $pessoa_nova);
    $stmt->bindParam(':nomeAntigo', $pessoa_antiga);
    $stmt->bindParam(':cidadeIdAntigo', $cidade_id_antigo);
    $stmt->bindParam(':cidadeIdNovo', $cidade_id_novo);
    $stmt->execute();
    return json_encode([
        "Pessoa alterada" => $nome_pessoa,
        "Pessoa nova" => $pessoa_nova
    ]);
}
function deletePessoas($nome_pessoa)
{
    global $conn;

    $stmt = $conn->prepare("DELETE FROM `pessoa` WHERE nome_pessoa = '$nome_pessoa'");
    $stmt->execute();
    return json_encode(["Nome das pessoas removidas" => $nome_pessoa]);
}
