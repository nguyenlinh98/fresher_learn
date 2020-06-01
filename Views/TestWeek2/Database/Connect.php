<?php

//namespace Database;

class Connection
{
    const HOST = "localhost";
    const USER = "admins";
    const PASSWORD = "admin";
    const DATABASE_NAME = "test";
    protected $conn;

    public function __construct()
    {
        $this->conn = $this->connect();
    }

    public final function connect()
    {
        try {

            $this->conn = mysqli_connect(self::HOST,self::USER,self::PASSWORD,self::DATABASE_NAME);
            if ($this->conn->connect_error) {
                throw new \Exception('The connection is failed', 1);
            }

            return $this->conn;

        } catch (\Exception $e) {
            die($e->getMessage());
        }

    }

    public final function close()
    {
        if (is_null($this->conn)) {
            die("The connection isn't defined");
        } else {
            return mysqli_close($this->conn);
        }

    }
}

$conn11 = new Connection();
$conn = $conn11->connect();