<?php 
header("Content-Type: application/json");

if($_SERVER["REQUEST_METHOD"] == "GET"){
    require "../Controller/estado.php";
    echo buscarEstado();
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    require "../Controller/estado.php";
    echo colocarEstado();
}
if($_SERVER["REQUEST_METHOD"] == "PUT"){
    require "../Controller/estado.php";
    echo "Passei na rota Estado - PUT";
}
if($_SERVER["REQUEST_METHOD"] == "DELETE"){
    require "../Controller/estado.php";
    echo deletarEstado();
}
