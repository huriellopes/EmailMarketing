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

    public function save(string $table, array $fields = [])
    {
        $dados = array_values($fields);
        try {
            //$columns = array_keys($fields);
            $values = array_fill(0, count($fields), '?');
            $values = implode(', ', $values);
            $sql = "INSERT INTO {$table} VALUES(NULL,{$values},'1',now())";
            $save = $this->db->prepare($sql);
            return $save->execute($dados);
        } catch (PDOException $e) {
            echo $e->getmessage();
            exit();
        }
    }

    public function update(string $table, array $fields = [])
    {
        $dados = array_values($fields);
        try {
            $values = array_fill(0, count($fields), '=?');
            $values = implode(', ', $values);
            $sql = "UPDATE {$table} SET  {$values} WHERE {$values}";
            var_dump($sql);
            $update = $this->db->prepare($sql);
            return $update->execute($dados);
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }

    public function find(string $table, $param, $inicio, $ate)
    {
        try {
            $sql = "SELECT *,{$param} FROM {$table} where cadastro >= '".$inicio."' and cadastro <= '".$ate."' ";
            $find = $this->db->prepare($sql);
            $find->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        return $find->fetchAll(PDO::FETCH_ASSOC);
    }
}
