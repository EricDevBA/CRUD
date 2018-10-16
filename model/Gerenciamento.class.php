<?php

class Gerenciamento extends Conexao
{

    public function insereCliente($table, $data)
    {
        $pdo = parent::get_instance();
        $fields = implode(", ", array_keys($data));
        $values = ":" . implode(", :", array_keys($data));
        $sql = "INSERT INTO $table ($fields) VALUES ($values)";
        $statement = $pdo->prepare($sql);
        foreach ($data as $key => $value) {
            $statement->bindValue(":$key", $value, PDO::PARAM_STR);

        }
        $statement->execute();



    }

    public function ListarClient($table)
    {
        $pdo = parent::get_instance();
        $sql = "SELECT * FROM $table  ORDER BY nome ASC";
        $statement = $pdo->prepare($sql);
        $statement->execute();

        return $statement->fetchAll();

    }


}



?>