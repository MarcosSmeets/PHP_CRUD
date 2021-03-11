<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "tito";

    $conn = new mysqli($servidor,$usuario,$senha,$dbname);

    if($conn->connect_error){
        die("Erro de coneção: " . $conn->connect_error);
    }echo "Conectado com sucesso";
?>