<?php

include_once '../controller/UserController.php';

error_reporting(E_ALL);
ini_set('display_errors','on');

header("Content-Type: application/json");
header("Access-Control-Allow-Methods: POST");

$user = new UserController();
$data = json_decode(file_get_contents("php://input"));
echo $user->signup($data);