<?php

namespace factory\database;
class PostgreSqlDatabase extends Database
{
    public function __construct()
    {
        $this->connection = "connect PostgreSqlDatabase";
    }

    public function create(string $table, string $data):string{
        return "create PostgreSqlDatabase";
    }
    public function update(int $id, string $table, string $data):string{
        return "update PostgreSqlDatabase";
    }
    public function delete(int $id, string $table):string{
        return "delete PostgreSqlDatabase";
    }
    public function select(int $id, string $table):string{
        return "select PostgreSqlDatabase";
    }
}