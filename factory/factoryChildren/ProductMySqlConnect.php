<?php
namespace factory\factoryChildren;

use factory\Connect;
use factory\database\MysqlDatabase;
use factory\model\ProductModel;

class ProductMySqlConnect extends Connect
{

    protected function createModel(): ProductModel
    {
        return new ProductModel();
    }

    protected function createDatabase(): MySqlDatabase
    {
        return new MySqlDatabase();
    }

}