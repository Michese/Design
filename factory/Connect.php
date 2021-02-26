<?php

namespace factory;

use factory\database\Database;
use factory\model\Model;

abstract class Connect
{
    private Database $database;
    private Model $model;

    public function __construct()
    {
        $this->database = $this->createDatabase();
        $this->model = $this->createModel();
    }

    abstract protected function createDatabase(): Database;
    abstract protected function createModel(): Model;

    public function create(string $data):string
    {
        $result = $this->database->create($this->model->getTable(), $data);
        $this->model->setData($result);
        return $this->model->getData();
    }

    public function update(string $data):string
    {
        $result = $this->database->update($this->model->getId(), $this->model->getTable(), $data);
        $this->model->setData($result);
        return $this->model->getData();
    }

    public function delete():string
    {
        $result = $this->database->delete($this->model->getId(), $this->model->getTable());
        $this->model->setData($result);
        return $this->model->getData();
    }

    public function select():string
    {
        $result = $this->database->select($this->model->getId(), $this->model->getTable());
        $this->model->setData($result);
        return $this->model->getData();
    }

}