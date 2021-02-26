<?php

namespace factory\factoryChildren;
use factory\Connect;
use factory\database\MysqlDatabase;
use factory\model\UserModel;

class UserMySqlConnect extends Connect
{

    protected function createModel(): UserModel
    {
        return new UserModel();
    }

    protected function createDatabase(): MySqlDatabase
    {
        return new MySqlDatabase();
    }

}