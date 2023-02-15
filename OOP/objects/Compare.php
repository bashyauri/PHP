<?php
class Posts
{
    public $post;
    function __construct($post){
        $this->post = $post;
        
    }
  
}
  // Identity Operator ===
  function compare1(&$obj1, &$obj2)
  {
      if ($obj1 === $obj2){
          return true;      
      } else{
          return false;
      }
  }
  // Comparison Operator ==
  function compare2(&$obj1, &$obj2)
  {
      if ($obj1 == $obj2){
          return true;      
      } else{
          return false;
      }

  }
$post1 = new Posts("This is the first posts");
$post2 = new Posts("This is the first posts");

echo compare1($post1, $post2) ? "Same": "Different";