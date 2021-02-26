<?php

namespace factory\database;
class MysqlDatabase extends Database
{
    public function __construct()
    {
        $this->connection = "connect MysqlDatabase";
    }

    public function create(string $table, string $data):string{
        return "create MysqlDatabase";
    }
    public function update(int $id, string $table, string $data):string{
        return "update MysqlDatabase";
    }
    public function delete(int $id, string $table):string{
        return "delete MysqlDatabase";
    }
    public function select(int $id, string $table):string{
        return "select MysqlDatabase";
    }

}