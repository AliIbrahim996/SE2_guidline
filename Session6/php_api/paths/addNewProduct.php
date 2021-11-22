<?php
include_once '../controller/ProductController.php';

error_reporting(E_ALL);
ini_set('display_errors','on');

//header() is used to send a raw HTTP header
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");

$product = new ProductController();
$data = json_decode(file_get_contents("php://input"));
echo $product->addProduct($data);