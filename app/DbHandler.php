<?php

namespace App;

use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Exception;

class DbHandler
{
    protected function connect()
    {
        $connectionParams = [
            'dbname' => 'persondb',
            'user' => 'root',
            'password' => '',
            'host' => 'localhost',
            'driver' => 'pdo_mysql'
        ];
        try {
            return DriverManager::getConnection($connectionParams);
        } catch (Exception $e) {
        }

    }
}