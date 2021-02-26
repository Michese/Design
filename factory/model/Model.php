<?php

namespace factory\model;

abstract class Model
{
    protected string $table;
    protected string $primaryKey;
    protected int $id;

    /**
     * @return string
     */
    public function getTable(): string
    {
        return $this->table;
    }

    /**
     * @return string
     */
    public function getPrimaryKey(): string
    {
        return $this->primaryKey;
    }

    public function getId():int
    {
        return $this->id;
    }

    abstract public function setData(string $data);
    abstract public function getData():string;
}