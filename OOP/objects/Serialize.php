<?php
class Posts{
    public $post;
    function __construct($post){
        $this->post = $post;
        
    }
}
/*
$post1 = new Posts("This is the first post");

$serialized = serialize($post1);
echo $serialized.PHP_EOL;
file_put_contents('Posts.txt',$serialized);
*/
$unserialized = file_get_contents('Posts.txt');
$post2 = unserialize($unserialized);
echo $post2->post;