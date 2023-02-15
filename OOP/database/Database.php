<?php
require_once ("config/config.php");
class Database{
private $host = DB_HOST;
private $user = DB_USER;
private $password = DB_PWD;
private $dbname = DB_NAME;

private $connection;
private $error;
private $stmt;
private $dbconnected = false;

public function __construct(){
    // Set PDO Connection
    $dsn = "mysql:host={$this->host};dbname={$this->dbname}";
    $options = array(
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
    try {
        $this->connection = new PDO($dsn, $this->user,$this->password,$options);
        $this->dbconnected = true;
    } catch (PDOException $e) {
        $this->error = $e->getMessage(). PHP_EOL;
    }
    
}
public function getError()
{
    return $this->error;
}
public function isConnected():bool
{
    return $this->dbconnected;
}
// Prepare statement with query
public function query($query)
{
    $this->stmt = $this->connection->prepare($query);
}
// Execute the prepared statement
public function execute()
{
    return $this->stmt->execute();
}
// Get the result set as an Array of objects
public function resultSet():array
{
    $this->execute();
    return $this->stmt->fetchAll(PDO::FETCH_OBJ);
}
// Get Record row count
public function rowCount():int
{
    return $this->stmt->rowCount();
}
// Get single Record as Object
public function single():object
{
    $this->execute();
    return $this->stmt->fetch(PDO::FETCH_OBJ);
}
public function bind($param,$value,$type=null):void
{
    if (is_null($type)){
        switch (true){
            case is_int($value):
                $type = PDO::PARAM_INT;
                break;
            case is_bool($value):
                $type = PDO::PARAM_BOOL;
                break;
            case is_null($value):
                $type =PDO::PARAM_NULL;
            default:
                $type = PDO::PARAM_STR;

        }
    }
    $this->stmt->bindValue($param,$value,$type);
}

    
}