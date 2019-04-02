<?php

namespace App\Core\Database;

use PDO;

class Connection

{

    public static function make($config)
    {
        try {
            return new PDO($config['connection'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );

        } catch (PDOException $e) {
            error_log($e);
            die ("Невозможно подключиться к базе данных, дальнейшая работа невозможна.
             Попробуйте воспользоваться сервисом позже.");
        }

    }
}