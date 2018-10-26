<?php
include_once '../model/Conexao.class.php';
include_once '../model/Gerenciamento.class.php';

$gerenciamento = new Gerenciamento();


$id = $_POST['id'];

if (isset($id) && !empty($id)) {
    $gerenciamento->deleteClient("registros", $id);
    header("Location: ../index.php?client_deleted");

}




?>