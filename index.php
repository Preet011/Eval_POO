<?php
// include class files
require_once 'ElecProduct.php';
require_once 'Store.php';

//create products
$product1 = new ElecProduct("1", "iPhone 15", "Apple", "Smartphone", 1249);
$product2 = new ElecProduct("2", "OLED TV", "LG", "Television", 1899);
$product3 = new ElecProduct("3", "Galaxy S23", "Samsung", "Smartphone", 999);

$store = new Store();

// adding products to store
$store->add($product1);
$store->add($product2);
$store->add($product3);
// displaying product1

//showing products in array products with echo
echo "<h2>Products: </h2>";
$store->showProducts();

?>

