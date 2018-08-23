<?php

namespace Base\Model;

use Base\Database\Database;
use PDO;

abstract class Model
{
    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = Database::getDb();
    }

    public function all($table)
    {
        try {
            $sql = "SELECT * FROM {$table}";
            $all = $this->db->prepare($sql);
            $all->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit();
        }
        return $all->fetchAll(PDO::FETCH_ASSOC);
    }

    public function save(string $table, $fields = [])
    {
        $dados = $fields;
        try {
            $sql = "INSERT INTO {$table} VALUES(NULL,'".explode(', ', $fields)."',now())";
            var_dump($sql);
            $save = $this->db->prepare($sql);
            $save->bindValue($dados, $fields);
            return $save->execute();
        } catch (PDOException $e) {
            echo $e->getmessage();
            exit();
        }
    }
}
