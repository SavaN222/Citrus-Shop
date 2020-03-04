<?php 

namespace App\libraries;

use PDO;

/**
 * PDO Database Class
 * Connect to database
 * Created prepared statements, bind values, return rows and results
 */
class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbName = DB_NAME;

    private $conn;
    private $stmt;
    private $error;

    public function __construct()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        // Create PDO instance
        try {
            $this->conn = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    /**
     * Write sql query
     * @param string $sql 
     */
    public function query(string $sql)
    {
        $this->stmt = $this->conn->prepare($sql);
    }

    /**
     * Bind parameter in query
     * @param string|int $param 
     * @param string|int $value 
     */
    public function bind($param, $value)
    {
        $this->stmt->bindParam($param, $value);
    }

    /**
     * Execute query
     */
    public function execute()
    {
        return $this->stmt->execute();
    }

    /**
     * Get all data like objects
     */
    public function getAll()
    {
        $this->execute();

        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Get single data like object
     */
    public function getSingle()
    {
        $this->execute();

        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
    
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}