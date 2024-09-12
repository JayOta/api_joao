<?php 
header("Content-Type: application/json");

if($_SERVER["REQUEST_METHOD"] == "GET"){
    require "../Controller/cidade.php";
    echo buscarCidade();
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    require "../Controller/cidade.php";
    echo colocarCidade();
}
if($_SERVER["REQUEST_METHOD"] == "PUT"){
    require "../Controller/cidade.php";
    echo alterarCidade();
}
if($_SERVER["REQUEST_METHOD"] == "DELETE"){
    require "../Controller/cidade.php";
    echo deletarEstado();
}