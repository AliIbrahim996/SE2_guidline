<?php

include_once "../model/user.php";
include_once "../config/database.php";
require_once "../config/constants.php";
include_once "validation.php";

class UserController
{
    protected User $model;

    function __construct()
    {
        $conn = (new Database())->connect();
        $this->model = new User($conn);
    }

    function signup($data)
    {
        if (Validation::checkUserEmptyData($data))
        {
            [$code, $exception] = $this->model->registerUser($data);
            $output = "";
            switch ($code)
            {
                case CREATED:
                    $output = ["message" => "user registered successfully!",];
                    break;
                case BAD_REQUEST:
                    $output = ["message" => "something went wrong! " . $exception->getMessage()];
                    break;
            }
        }
        else
        {
            $code = NOT_FOUND;
            $output = ["message" => "check your data!"];
        }
        http_response_code($code);
        return json_encode($output);
    }

    function login($data)
    {
        [$code, $output] = $this->model->login($data->email, $data->password);
        switch ($code)
        {
            case VERIFIED :
                $json = [
                    "message" => "successfully logged in",
                    "user_info" => [
                        "id" => $output["id"],
                        "fullName" => $output["name"],
                        "email" => $output["email"]
                    ]
                ];
                break;
            case UNAUTHORIZED :
                $json = [
                    "message" => "Failed to login! wrong password "];
                break;
            case NOT_FOUND:
                $json  = ["message" => "failed to logged in! user not found"];
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