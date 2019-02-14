<?php

class QueryBuilder
{

    protected $pdo;
    protected $error_message;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    public function selectAll($table){
        $statement = $this->pdo->prepare("SELECT * FROM $table");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $data) {
        try {

            $sql = sprintf(

                "INSERT INTO %s (%s) VALUES (%s)",

                $table,

                implode(', ', array_keys($data)),

                ':' . implode(', :', array_keys($data))

            );

            $statement = $this->pdo->prepare($sql);

            $statement->execute($data);

            return true;

        } catch (Exception $e) {
            $this->error_message = $e->getMessage();
            return FALSE;
        }
    }

    public function getError() {
        return $this->error_message;
    }
}