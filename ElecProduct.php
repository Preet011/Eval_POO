<?php
// class for electronic products
class ElecProduct {

// properties
public $id;
public $nom;
public $marque;
public $category;
public $prix;

// __construct  to initialize product details
    public function __construct($id, $nom, $marque, $category, $prix)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->marque = $marque;
        $this->category = $category;
        $this->prix = $prix;
    }
// Method to return full description of the product
    public function getDescription() {
        return "ID: $this->id - $this->nom($this->marque) - $this->category - $this->prix €<br>";
    }

}

?>