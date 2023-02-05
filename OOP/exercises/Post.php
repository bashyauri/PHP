<?php


class Posts
{
    public $content;

    function __construct($content){
      $this->content = $content;
    }

    function __destruct(){
        echo "This is Destructor!" . PHP_EOL;
    }

    function printContent(){
        echo $this->content.PHP_EOL;
        return $this;
        

    }

}

$post1 = new Posts("its getting ugly");
$content = $post1->printContent()->content;
echo $content.PHP_EOL;