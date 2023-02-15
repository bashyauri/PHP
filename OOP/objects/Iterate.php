<?php
class Posts
{
    public $post;
    public $hasPosts = true;
    function __construct($post){
        $this->post = $post;
        
    }
    function hello():void
    {
        echo "Hello";
    }
  
}
$post1 = new Posts("This is a new Post");
foreach ($post1 as $post => $value) 
{
    echo "{$post} => {$value} ".PHP_EOL;
}
echo PHP_EOL;
var_dump($post1);