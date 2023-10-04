<?php
class Product {
    // Properties
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price) {
        // Initialize properties
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    // Method to format the price
    public function getFormattedPrice() {
        return '$' . number_format($this->price, 2);
    }

    // Method to show product details
    public function showDetails() {
        echo "Product Details:</br>";
        echo "- ID: {$this->id}</br>";
        echo "- Name: {$this->name}</br>";
        echo "- Price: {$this->getFormattedPrice()}</br>";
    }
}

// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();
?>