<?php 
require '../Service/conexao.php';
require '../Model/crud_estado.php';

$nome_cidade = "Umu";
function getCidades(){
    header("Content-type: application/json");
    global $conn;

    $stmt = $conn->prepare("SELECT * FROM cidade");
    $stmt->execute();
    $cidade = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return json_encode($cidade);
}
function postCidades(){
    global $conn, $nome_cidade, $id;
    $stmt = $conn->prepare("INSERT INTO `cidade`(`nome_cidade`, `estado_id`) VALUES (\"$nome_cidade\", \"$id\")");
    $stmt->execute();
    $id_cidade = $conn->lastInsertId();
    $ultima_cidade = $conn->prepare("SELECT * FROM `cidade` WHERE id = $id_cidade");
    return json_encode(["Estado adicionado" => $ultima_cidade]);
}
function putCidades(){
    global $conn, $nome_cidade;

    $stmt = $conn->prepare("UPDATE `cidade` SET nome_cidade WHERE nome_cidade = '$nome_cidade'");
    $stmt->execute();
    $cidade_nova = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return json_encode(["Estado alterado" => $nome_cidade, "Estado novo" => $cidade_nova]);
}
function deleteCidades(){
    global $conn, $nome_cidade;

    $stmt = $conn->prepare("DELETE FROM `cidade` WHERE nome_cidade = $nome_cidade");
    $stmt->execute();
    return json_encode(["1 $ foi removida"]);
}