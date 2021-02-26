<?php

namespace factory\model;
class UserModel extends Model
{
    public function __construct()
    {
        $this->table = "users";
        $this->primaryKey = "id";
        $this->id = 1;
    }

    public function setData(string $data)
    {
        $this->data = $data;
    }

    public function getData():string
    {
        return $this->table . " " . $this->data;
    }

    private string $name;
    private int $age;
    private string $data;

}