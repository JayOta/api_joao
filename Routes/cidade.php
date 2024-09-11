<?php 
// header("Content-Type: application/json");

if($_SERVER["REQUEST_METHOD"] == "GET"){
    echo "Passei na rota Estado - GET";
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "Passei na rota Estado - POST";
}
if($_SERVER["REQUEST_METHOD"] == "PUT"){
    echo "Passei na rota Estado - PUT";
}
if($_SERVER["REQUEST_METHOD"] == "DELETE"){
    echo "Passei na rota Estado - DELETE";
}