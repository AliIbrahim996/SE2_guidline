<?php

require_once  '../config/env.php';

class Product
{
    private static PDO $db_conn;
    private string $table_name = "product";

    function __construct(PDO $conn)
    {
        self::$db_conn = $conn;
    }

    function addProduct($data): array
    {
        $query= "INSERT into $this->table_name (name, category) VALUES (?,?)";
        try
        {
            $stmt = self::$db_conn->prepare($query);
            $stmt->bindParam(1,$data->name);
            $stmt->bindParam(2,$data->category);

            //execute the query
            $stmt->execute();
            return [CREATED, null];
        }
        catch (PDOException $exception)
        {
            return [BAD_REQUEST, $exception];
        }

    }

    function getAll(): array
    {
        $query = "SELECT * from $this->table_name";
        try
        {
            $stmt = self::$db_conn->prepare($query);
            $stmt->execute();
            $rowCount = $stmt->rowCount();
            if($rowCount>0)
            {
                //init empty array
                $product_array = array();
                $product_array['products'] = array();
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
                {
                    $product = array(
                        "id" => $row['id'],
                        "name" => $row['name'],
                        "category" => $row['category']
                    );
                    array_push($product_array['products'],$product);
                }
                return [VERIFIED, $product_array];
            }
            else
            {
                return [NOT_FOUND, null];
            }
        }
        catch (PDOException $exception)
        {
            return [BAD_REQUEST, $exception];
        }
    }
}