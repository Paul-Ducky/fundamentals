<?php
declare(strict_types=1);

class ProductLoader
{
    private array $productArray = [];
    private PDO $conn;

    public function __construct()
    {
        $DB = new Db();
        $this->conn = $DB->connect();
    }
    public function getAll(): array
    {
        $stmt = $this->conn->prepare("SELECT id, name, price, tax FROM product");
        $stmt->execute();
        $results = $stmt->fetchAll();
        foreach ($results as $result) {
            $product = new Product((int)$result['id'], (string)$result['name'], (float)$result['price'], (float)$result['tax']);
            $this->productArray[] = $product;
        }
        return $this->productArray;
    }
}