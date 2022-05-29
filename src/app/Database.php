<?php

class Database
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=192.168.33.10;dbname=test', "root", "root", [PDO::ERRMODE_EXCEPTION]);
    }

    public function create($productObject, $tableName)
    {
//        $tableName = strtolower($tableName);
//        $product = get_object_vars($productObject);
//        $columnNames = array_keys($product);
//        $values = array_values($product);
//        // $test = ['height', 'width', 'length'];
//        $test = implode(",", $columnNames);
//        echo '<pre>';
//        print_r($columnNames);
//        echo '</pre>';
//        exit;
//        $this->pdo->prepare("INSERT INTO $tableName() VALUES");
    }

    public function readList()
    {
        
    }

    public function massDelete()
    {
        
    }


}