<?php

namespace App\Models;

use PDO;

class Model 
{
    private $userName = 'root';
    private $password = '';
    private $dbName = 'eliseu-pdo-php';
    private $host = '127.0.0.1';

    public function query(string $sql)
    {
        $connection = new PDO("mysql:host={$this->host};dbname={$this->dbName}", $this->userName, $this->password);
        $preparation = $connection->prepare($sql);
        $preparation->execute();

        return $preparation->fetchAll(PDO::FETCH_OBJ); //fetchAll returna como array
    }

}