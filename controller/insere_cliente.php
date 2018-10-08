<?php

include_once('..model/conexao.class.php');
include_once('..model/gerenciamento.class.php');

$gerenciamento = new gerenciamento();

$data = $_POST;

if (isset($data) && !empty($data))  {
    $gerenciamento->InsertClient("registros", $data);
    header("Location:../index.php/add_client_success ");




}





?>