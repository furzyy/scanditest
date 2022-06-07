<?php

class Database
{
    private static PDO $PDO;

    public static function getDatabaseInstance(): PDO
    {
        if (!isset(self::$PDO)) {
            $database = 'test';
            $username = 'root';
            $password = 'root';
            $servername = '192.168.33.10';
            $dsn = "mysql:dbname=$database;host=$servername:3306";

            self::$PDO = new PDO($dsn, $username, $password);
            self::$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$PDO;
    }

    public function prepare($sql)
    {
        $pdo = self::getDatabaseInstance();
        return $pdo->prepare($sql);
    }

    public function getTableColumns($tableName)
    {
        $query = $this->prepare("DESCRIBE $tableName");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_COLUMN);
    }

    public function getProperties($tableName): array
    {
        $properties = [];
        $tableColumns = $this->getTableColumns($tableName);
        echo '<pre>';
        var_dump(get_class($this));
        echo '</pre>';
        exit;
        foreach (get_object_vars($this) as $key => $value) {
            if (in_array($key, $tableColumns)) {
                $properties[$key] = $value;
            }
        }

        return $properties;
    }

    public function create($tableName)
    {
        $tableName = strtolower($tableName);
        $properties = $this->getProperties($tableName);
        $columns = implode(', ', array_keys($properties));
        $values = array_values($properties);
        $placeholders = substr(str_repeat('?, ', count($properties)), 0, -2);

        $sql = "INSERT INTO $tableName($columns) VALUES($placeholders)";
        $statement = $this->prepare($sql);
        $statement->execute($values);
    }


    public function readList()
    {
        
    }

    public function massDelete()
    {
        
    }


}