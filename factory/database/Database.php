<?php
namespace factory\database;

abstract class Database
{
    protected string $connection;

    abstract public function create(string $table, string $data):string;
    abstract public function update(int $id, string $table, string $data):string;
    abstract public function delete(int $id, string $table):string;
    abstract public function select(int $id, string $table):string;
}