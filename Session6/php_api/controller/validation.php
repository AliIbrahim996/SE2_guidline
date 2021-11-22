<?php


class Validation
{
    static function checkUserEmptyData($data): bool
    {
        if (!empty($data->email) &&
            !empty($data->password) &&
            !empty($data->name)) {
            return true;
        } else {
            return false;
        }
    }

    static function checkEmptyProductData($data) : bool
    {
        if(!empty($data->name) && !empty($data->category))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}