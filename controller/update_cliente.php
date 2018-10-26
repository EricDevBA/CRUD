<?php

include_once '../model/Conexao.class.php';
include_once '../model/Gerenciamento.class.php';

$gerenciamento = new Gerenciamento();

$atualiza_dados = $_POST;
$id = $_POST['id'];

if (isset($id) && !empty($id)) {
$gerenciamento->atualizarDados("registros",$atualiza_dados,$id);

    header("Location: ../index.php?atualizado_sucesso");
}



?>