<?php
require_once("Database.php");
$db = new Database();
echo $db->isConnected() ? "DB is connected" : "DB is not connected".PHP_EOL;
if (!$db->isConnected()){
    echo $db->getError().PHP_EOL;
    die("Unable to connect to DB");
}
$db->query("SELECT * FROM tb_oop_test");
var_dump($db->single());
echo "Rows: " . $db->rowCount();
$db->query("SELECT * FROM tb_oop_test where id = :id");
$db->bind(':id',2);
var_dump($db->single());