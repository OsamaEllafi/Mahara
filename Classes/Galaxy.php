<?php
namespace Mahara\Classes;

use Mahara\traits\Logger;
use Mahara\Interface\ProductInterface;

class Galaxy extends Product implements ProductInterface
{
    use Logger;
    public function calculateTotalCost()
    {

        $this->log($message = "Thank you for purchaing: " . $this->quantity . " " . $this->name . " " . "Purchase time:" . date("H:i"));
        return ($this->price * $this->quantity);


    }
    public function displayProductInfo()
    {
        echo "Product: " . $this->name . "<br>";
        echo "Price: $" . $this->price . "<br>";
        echo "Quantity: " . $this->quantity . "<br>";
    }
}