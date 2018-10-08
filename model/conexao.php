<?php

class conexao
{

    public static $instace;

    public static function conectar()
    {

        if (!isset(self::$instance)) {
            self::$instace = new PDO(
                'mysql:host=localhost;dbname=agendamentos;',
                "root",
                "",
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES uff8')
            );
            self::$instace->setAtrribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE_EXCEPTION);


        }

        return self::$instace;

    }



}




?>