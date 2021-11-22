<?php
include_once '../controller/ProductController.php';

error_reporting(E_ALL);
ini_set('display_errors','on');

//header() is used to send a raw HTTP header
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");

$product = new ProductController();
echo $product->getAllProducts();