<?php

namespace factory\factoryChildren;


use factory\Connect;
use factory\database\PostgreSqlDatabase;
use factory\model\UserModel;

class UserPostgreSqlConnect extends Connect
{

protected function createModel(): UserModel
{
    return new UserModel();
}

    protected function createDatabase(): PostgreSqlDatabase
    {
        return new PostgreSqlDatabase();
    }

}