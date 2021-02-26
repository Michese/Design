<?php

use factory\factoryChildren\ProductPostgreSqlConnect;
use factory\factoryChildren\UserMySqlConnect;

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});


function userFunctions() {

    $user = new UserMySqlConnect();
    return $user->update("hello");
}

function productFunctions() {
    $product = new ProductPostgreSqlConnect();
    $product->create("hello");
    return $product->select();
}

echo userFunctions();

echo "<br>";

echo productFunctions();