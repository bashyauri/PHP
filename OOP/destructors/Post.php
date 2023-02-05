<?php
class Post {
    function __construct(){
        echo "This is a constructor".PHP_EOL;

    }
    function __destruct(){
        echo "This is a destructor".PHP_EOL;

        
    }
}
$post1 = new Post();