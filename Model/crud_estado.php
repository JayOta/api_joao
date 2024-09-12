<?php 
    require "../Service/conexao.php";
    $nome_estado = "Paraná";

function getEstados(){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM estado");
    $stmt->execute();
    $estados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    header("Content-Type: application/json");
    return json_encode($estados);
}
function postEstados(){
    global $conn, $nome_estado;

    $sigla_estado = "<P";
    $stmt = $conn->prepare("INSERT INTO `estado`(`nome_estado`, `sigla_estado`)
                            VALUES (\"$nome_estado\",\"$sigla_estado\") ");
    $stmt->execute();
    $id = $conn->lastInsertId();
    $ultimo_estado = $conn->prepare("SELECT * FROM `estado` WHERE id = '$id'");
    return json_encode(["Estado adicionado" => $ultimo_estado]); // Arrumar aqui
}
function putEstados(){
    global $conn, $nome_estado;

    $stmt = $conn->prepare("UPDATE `cidade` SET nome_cidade WHERE nome_cidade = '$nome_estado'");
    $stmt->execute();
    $estado_novo = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return json_encode(["Estado alterado" => $nome_estado, "Estado novo" => $estado_novo]);
}
function deleteEstados(){
    global $conn, $nome_estado;

    $stmt = $conn->prepare("DELETE FROM `estado` WHERE nome_estado = '$nome_estado'");
    $stmt->execute();
    return json_encode(["1 estado foi removido"]);
}