<?php

require_once "Database.php";

$page = $_SERVER["REQUEST_URI"] ?? null;
$requestMethod = $_SERVER["REQUEST_METHOD"];
$db = new Database();

switch ($page) {
    case @"/":
        require_once "templates/index.php";
        break;

    case @"/add_product":
        if ($requestMethod === "POST") {
            $productType = ucfirst($_POST["type_switcher"]);

            require_once "models/".$productType.".php";

            $productObject = new $productType();
            $productObject->setSku($_POST["sku"]);
            $productObject->setName($_POST["name"]);
            $productObject->setPrice($_POST["price"]);

            switch ($productType) {
                case "Dvd":
                    $productObject->setSize($_POST["size"]);
                    break;
                case "Furniture":
                    $productObject->setHeight($_POST["height"]);
                    $productObject->setWidth($_POST["width"]);
                    $productObject->setLength($_POST["length"]);
                    break;
                case "Book":
                    $productObject->setWeight($_POST["weight"]);
            }
            $db->create($productObject, $productType);


        }
        require_once "templates/addProduct.php";
        break;
}