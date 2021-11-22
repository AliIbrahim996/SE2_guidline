<?php

require_once '../config/env.php';

class User
{
    private static PDO $db_conn;
    private string $table_name = "user";
    private int $id;
    private string $email;
    private string $name;
    private string $password;

    function __construct(PDO $conn)
    {
        self::$db_conn = $conn;
    }

    function registerUser($data): array
    {
        $query = "INSERT INTO $this->table_name (name, email, password) VALUES (?, ?, ?) ";
        try {
            $stmt = self::$db_conn->prepare($query);

            //bind values
            $password = password_hash($data->password, PASSWORD_BCRYPT);
            $stmt->bindParam(1, $data->name);
            $stmt->bindParam(2, $data->email);
            $stmt->bindParam(3, $password);

            //execute the query
            $stmt->execute();
            return [CREATED, null];
        } catch (PDOException $exception) {
            return [BAD_REQUEST, $exception];
        }
    }

    function login($email, $password): array
    {
        [$flag, $exception] = $this->userExists($email);
        if ($flag)
        {
            if (password_verify($password, $this->password))
            {
                return [VERIFIED, ["name" => $this->getName(), "email" => $this->getEmail(), "id" => $this->getId()]];
            }
            else
            {
                return [UNAUTHORIZED, null];
            }
        }
        else if (!empty($exception))
        {
            return [BAD_REQUEST, $exception];
        }
        else
        {
            return [NOT_FOUND, null];
        }
    }

    private function userExists($email): array
    {

        // query to check if email exists
        $query = "SELECT id, name, password FROM ".$this->table_name ." where email = ? LIMIT 0,1";

        try {
            // prepare the query
            $stmt = self::$db_conn->prepare($query);
            // bind value
            $stmt->bindParam(1, $email);
            // execute the query
            $stmt->execute();
            // get number of rows
            $num = $stmt->rowCount();
            if ($num > 0) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $this->id = $row['id'];
                $this->name = $row['name'];
                $this->password = $row['password'];
                $this->email = $email;
                // return true because email exists in the database
                return [true, null];
            }
        } catch (PDOException $exception) {
            return [false, $exception];
        }
        // return false if email does not exist in the database
        return [false, null];
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}