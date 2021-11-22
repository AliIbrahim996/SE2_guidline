<?php

class Database
{
    function __construct()
    {
        include_once  'env.php';
    }

    static function connect(): ?PDO
    {
        $conn = null;
        try
        {
            //! public PDO::__construct(string $dsn,?string $username = null,?string $password = null,?array $options = null)
            //! DO::__construct — Creates a PDO instance representing a connection to a database.
            //! dsn The Data Source Name, or DSN, contains the information required to connect to the database.
            //! username bThe user name for the DSN string. This parameter is optional for some PDO drivers.
            //passwd The password for the DSN string. This parameter is optional for some PDO drivers.
            $conn = new PDO('mysql:127.0.0.1='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD);
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $exception)
        {
            echo '<h1>Connection error!</h1> <br/>'.$exception->getMessage();
        }
        return $conn;
    }
}