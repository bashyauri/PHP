<?php
Interface Databases{
    function openConnection();
    
}
class OracleDatabase implements Databases{
    function openConnection(){
        echo "Using the Oracle Driver to establish the connection";
    }
    
}
class MySQLDatabase implements Databases{
    function openConnection(){
        echo "Using the Mysql Driver to establish the connection";
    }
    
}