<?php
namespace factory\factoryChildren;

use factory\Connect;
use factory\database\PostgreSqlDatabase;
use factory\model\ProductModel;

class ProductPostgreSqlConnect extends Connect
{

    protected function createModel(): ProductModel
    {
        return new ProductModel();
    }

    protected function createDatabase(): PostgreSqlDatabase
    {
        return new PostgreSqlDatabase();
    }

}