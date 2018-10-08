<?php

class gerenciamento extends conexao {
    public function InsertClient ($table,$data) {
        $pdo = parent::conectar();
        $fields = implode("", array_keys($data));
        $values = ":".implode(", :" , array_keys($data));
        $sql = "INSERT INTO $table($fields) values ($values)";
        $statement = $pdo->prepare($sql);
            foreach($data as $key => $values) {
                $statement->bindValue(":$key", $values, PDO::PARAM_STR);

            }
            $statement -> execute();



    }

}



?>