<?php
class Posts{
    public $post;
    function __construct($post){
        $this->post = $post;
        
    }
}
$post1 = new Posts("This is the first post");
$post2 = $post1; // Copy by reference
$post1->post = "This is modified";
echo $post2->post.PHP_EOL;


$post1 = new Posts("This is the first post");
$post2 = clone $post1;
$post1->post = "This is modified";
echo $post2->post.PHP_EOL;