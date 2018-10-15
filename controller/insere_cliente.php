<?php

include_once '../model/Conexao.class.php';
include_once '../model/Gerenciamento.class.php';

$gerenciamento = new Gerenciamento();

$data = $_POST;

if (isset($data) && !empty($data)) {
    $gerenciamento->insereCliente("registros", $data);
    header("Location: ../index.php?add_client_success");
}

?>