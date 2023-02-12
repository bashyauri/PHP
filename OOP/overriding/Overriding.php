<?php
class MYDatabase{
    function getConnection(){
        echo "Default it is connected to MYSQL".PHP_EOL;
    }
    
}
class Oracle extends MYDatabase{
    function getConnection(){
        echo "Default it is connected to Oracle".PHP_EOL;
    }
}
$db1 = new MYDatabase();
$db2 = new Oracle();
$db1->getConnection();
$db2->getConnection();