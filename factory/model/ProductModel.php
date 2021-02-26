<?php
namespace factory\model;

class ProductModel extends Model
{
    public function __construct()
    {
        $this->table = "products";
        $this->primaryKey = "id";
        $this->id = 2;
    }

    public function setData(string $data)
    {
        $this->data = $data;
    }

    public function getData():string
    {
        return $this->table . " " .$this->data;
    }

    private string $title;
    private string $data;
}