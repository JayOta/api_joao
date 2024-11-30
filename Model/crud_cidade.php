<?php
require '../Service/conexao.php';

function getCidades()
{
    header("Content-type: application/json");
    global $conn;

    $stmt = $conn->prepare("SELECT * FROM cidade");
    $stmt->execute();
    $cidade = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return json_encode($cidade);
}
function getCidadesParam($nome_cidade)
{
    global $conn;

    $stmt = $conn->prepare("SELECT * FROM `cidade` WHERE nome_cidade = '$nome_cidade'");
    $stmt->execute();
    $cidade = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return json_encode($cidade);
}
function postCidades($nome_cidade, $id)
{
    global $conn;

    $stmt = $conn->prepare("INSERT INTO `cidade`(`nome_cidade`, `estado_id`) VALUES (\"$nome_cidade\", \"$id\")");
    $stmt->execute();
    $id = $conn->lastInsertId();
    return json_encode(["Cidade adicionada" => $nome_cidade, "id" => $id]);
}
function putCidades($nome_cidade, $cidade_nova)
{
    global $conn;
    $cidade_antiga = $nome_cidade;
    $stmt = $conn->prepare("UPDATE cidade SET nome_cidade = :novoNome WHERE nome_cidade = :nomeAntigo");
    $stmt->bindParam(':novoNome', $cidade_nova);
    $stmt->bindParam(':nomeAntigo', $cidade_antiga);
    $stmt->execute();
    return json_encode([
        "Cidade alterada" => $nome_cidade,
        "Cidade nova" => $cidade_nova
    ]);
}
function deleteCidades($nome_cidade)
{
    global $conn;

    $stmt = $conn->prepare("DELETE FROM `cidade` WHERE nome_cidade = '$nome_cidade'");
    $stmt->execute();
    return json_encode(["Nome das cidades removidas" => $nome_cidade]);
}
