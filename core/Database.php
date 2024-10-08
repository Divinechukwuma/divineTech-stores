<?php
//connect to our MYSQL database and execute a query.
class Database
{
    public $conn;
    public $statement;

    public function __construct($config, $username = 'root', $password = '')
    {


        try {
            $dsn = 'mysql:' . http_build_query($config, '', ';');

            $this->conn = new PDO($dsn, $username, $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch (PDOException $e) {
            //Handle connection error
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function query($sql, $params = [])
    {
        try {
            // Prepare and execute query
            $this->statement = $this->conn->prepare($sql);
            $this->statement->execute($params);
            return $this;
        } catch (PDOException $e) {
            //Handle query execution error
            die("Query failed: " . $e->getMessage());
        }
    }

    public function lastInsertId()
    {
        return $this->conn->lastInsertId();
    }



    public function get()
    {
        try {
            //Fetch all rows
            return $this->statement->fetchAll();
        } catch (PDOException $e) {
            // Handle fetch error
            die("Fetch failed: " . $e->getMessage());
        }
    }

    public function find()
    {
        try {
            // Fetch a single row
            return $this->statement->fetch();
        } catch (PDOException $e) {
            //  Handle fetch error
            die("Fetch failed: " . $e->getMessage());
        }
    }

    public function findOrFail()
    {
        $result = $this->find();
        if (!$result) {
            //  Handle not found
            die("Data not found");
        }
        return $result;
    }
}
