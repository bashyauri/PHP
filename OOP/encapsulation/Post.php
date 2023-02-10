<?php
// Data encapsulation Concept or design pattern is followed
class Post{
    private $post = "";
    public function setPost($post){
        $this->post = $post;

    }
    public function getPost():string
    {
        return $this->post;
        
    }
}
$post = new Post();
$post->setPost("something is really fisshy");
echo $post->getPost();