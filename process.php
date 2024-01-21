<?php
/*
require_once('C:\xampp\htdocs\Backend-Mahara\traits\Logger.php');
require_once 'C:\xampp\htdocs\Backend-Mahara\Interface\ProductInterface.php';
require_once 'C:\xampp\htdocs\Backend-Mahara\Classes\Product.php';
require_once 'C:\xampp\htdocs\Backend-Mahara\Classes\Iphone.php';
require_once 'C:\xampp\htdocs\Backend-Mahara\Classes\Galaxy.php';
*/
require_once __DIR__ . '/vendor/autoload.php';

use Mahara\Classes\Iphone;
use Mahara\Classes\Galaxy;

date_default_timezone_set('Africa/Tripoli');




if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ($quantity = $_GET['quantity'] == 0) {
        // Display alert message
        echo '<script>';
        echo 'alert("Product quantity is 0.");';
        echo 'window.location.href = "same_page.php";';
        echo '</script>';
        exit;
    }

    $type = $_GET["type"];


    if ($type == "Iphone") {
        $product = new Iphone();
        $product->name = 'Iphone 14 Pro Max';
        $product->price = '500';
        $product->quantity = $_GET['quantity'];

    } elseif ($type == "Galaxy") {
        $product = new Galaxy();
        $product->name = 'Galaxy S22 ULTRA';
        $product->price = '500';
        $product->quantity = $_GET['quantity'];
    }
    /*$product->name = 'Iphone 14 Pro Mx';
    $product->price = '500';
    $product->quantity = $_GET['quantity'];*/

    // $product->displayProductInfo();
    // $product->calculateTotalCost();
} ?>


<!DOCTYPE html>
<html>

<head>
    <title>Product Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        .finish {
            color: green;
            text-align: center;
        }
    </style>


</head>

<body>
    <div class="container">
        <h1>Product Information</h1>
        <form>
            <label for="name">Product Name:</label>
            <input type="text" id="name" value="<?php echo $product->name ?>" name="name" required>

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" value="<?php echo $product->price ?>" step="0.01" required>

            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity"
                value="<?php echo $product->quantity = $_GET['quantity'] ?>" required>

            <label for="totalprice"> Total Price: </label>
            <input type="number" id="totalprice" name="totalprice" value="<?php echo $product->calculateTotalCost() ?>"
                required>
            <p class="finish">Purchase Succefully</p>
        </form>
    </div>
    <script>alert("Thank you for purchasing, have a nice day!") </script>

</body>

</html>