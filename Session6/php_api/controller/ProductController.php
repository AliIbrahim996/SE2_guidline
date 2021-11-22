<?php

include_once "../model/products.php";
include_once "../config/database.php";
require_once "../config/constants.php";
include_once "validation.php";


class ProductController
{
    protected Product $model;

    function __construct()
    {
        $conn = (new Database())->connect();
        $this->model = new Product($conn);
    }

    function addProduct($data)
    {
        if(Validation::checkEmptyProductData($data))
        {
            [$code,$exception] = $this->model->addProduct($data);
            $json_output = "";
            switch ($code)
            {
                case CREATED:
                    $json_output = ["message" => "new product added successfully!"];
                    break;
                case BAD_REQUEST:
                    $json_output = ["message" => "something went wrong! " . $exception->getMessage()];
                    break;
            }
        }
        else
        {
            $code = NOT_FOUND;
            $json_output = ["message" => "check your data!"];
        }

        http_response_code($code);
        return json_encode($json_output);
    }

    function getAllProducts()
    {
        [$code,$output] = $this->model->getAll();
        switch ($code)
        {
            case VERIFIED:
                $json = $output;
                break;
            case NOT_FOUND:
                $json  = ["message" => "No products found!"];
                break;
            case BAD_REQUEST:
                $json = ["message" => "failed to logged in! something went wrong please try again! "
                    . $output->getMessage()];
                break;
            default:
                $code = FORBIDDEN;
                $json = ["message" => "failed to logged in! Not allowed"];
                break;
        }
        http_response_code($code);
        return json_encode($json);
    }
}