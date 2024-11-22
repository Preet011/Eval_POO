<?php
// class for management of all products
class Store {

// Array in which all products are going to be stored
    public $products = [];

// Method to add product to store
    public function add(ElecProduct $product){
        $this->products[] = $product;
    }

// Method to display products in store
    public function showProducts(){

    // Check if there are any products in store
        if(empty($this->products)) {
            echo "Aucun produit trouvé";
        } else {
    // Loop through each product and show its description
            foreach($this->products as $product) {
                echo $product->getDescription();
            }

        }
    }
}

?>