<?php
require "../Service/conexao.php";
$nome_estado;

function getEstados()
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM estado");
    $stmt->execute();
    $estados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return json_encode($estados);
}
function getEstadosParam($nome_estado)
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM `estado` WHERE nome_estado = '$nome_estado'");
    $stmt->execute();
    $estados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return json_encode($estados);
}
function postEstados($nome_estado, $sigla_estado)
{
    global $conn;

    $stmt = $conn->prepare("INSERT INTO `estado`(`nome_estado`, `sigla_estado`)
                            VALUES (\"$nome_estado\",\"$sigla_estado\") ");
    $stmt->execute();
    $id = $conn->lastInsertId();
    return json_encode([
        "Estado adicionado" => $nome_estado,
        "id" => $id
    ]);
}
function putEstados($nome_estado, $estado_novo)
{
    global $conn;
    $estado_antigo = $nome_estado;
    $stmt = $conn->prepare("UPDATE estado SET nome_estado = :novoNome WHERE nome_estado = :nomeAntigo");
    $stmt->bindParam(':novoNome', $estado_novo);
    $stmt->bindParam(':nomeAntigo', $estado_antigo);
    $stmt->execute();
    return json_encode([
        "Estado alterado" => $nome_estado,
        "Estado novo" => $estado_novo
    ]);
}
function deleteEstados($nome_estado)
{
    global $conn;

    $stmt = $conn->prepare("DELETE FROM `estado` WHERE nome_estado = '$nome_estado'");
    $stmt->execute();
    return json_encode(["Nome dos estados removidos" => $nome_estado]);
}
