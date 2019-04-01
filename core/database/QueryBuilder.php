<?php

class QueryBuilder

{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)

    {

        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchall(PDO::FETCH_CLASS);

    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(

            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {

            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);

            echo '<h2>Ваша запись добавлена</h2>';

        } catch (Exception $e) {

            echo 'Не удалось добавить запись в базу данных.';

        }

    }

}