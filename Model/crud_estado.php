<?php 
    require "../Service/conexao.php";

function getEstados(){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM estado");
    $stmt->execute();
    $estados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    header("Content-Type: application/json");
    return json_encode($estados);
}
function postEstados(){
    global $conn;

    $nome_estado = "RJ";
    $sigla_estado = "p->";
    $stmt = $conn->prepare("INSERT INTO `estado`(`nome_estado`, `sigla_estado`)
                            VALUES (\"$nome_estado\",\"$sigla_estado\") ");
    $stmt->execute();
    $id = $conn->lastInsertId();
    $estados = $conn->prepare("SELECT * FROM `estado` WHERE id = '$id'");
    return json_encode(["Estado adicionado" => $estados]); // Arrumar aqui
}
function deleteEstados(){
    global $conn;

    $nome_estado = "Paraná";
    $stmt = $conn->prepare("DELETE FROM `estado` WHERE nome_estado = '$nome_estado'");
    $stmt->execute();
    return json_encode(["1 estado foi removido"]);
}