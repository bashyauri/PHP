<?php

require_once("Database.php");

  class Post {
    private $db;
    
    public function __construct(){
      $this->db = new Database;
    }

    // Get All Posts
    public function getPosts(){
      $this->db->query("SELECT * from tb_oop_posts");
      $results = $this->db->resultset();

      return $results;
    }

    // Get Post By ID
    public function getPostById($id){
      $this->db->query("SELECT * FROM tb_oop_posts WHERE id = :id");

      $this->db->bind(':id', $id);
      
      $row = $this->db->single();

      return $row;
    }
    // insert records 
    public function addPost($data):bool
    {
        $this->db->query("INSERT INTO tb_oop_posts (title,content)  VALUES (:title,:content)");
        $this->db->bind(':title',$data['title'] );
        $this->db->bind(':content',$data['content'] );
        if($this->db->execute())
        {
          return true;
        } else{
          return false;
        }
      

    }
     // Update Post
     public function updatePost($data){
      // Prepare Query
      $this->db->query('UPDATE tb_oop_posts SET title = :title, content = :content WHERE id = :id');

      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':title', $data['title']);
      $this->db->bind(':content', $data['content']);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    // Delete Post
    public function deletePost($id):bool
    {
      // Prepare Query
      $this->db->query('DELETE FROM tb_oop_posts WHERE id = :id');

      // Bind Values
      $this->db->bind(':id', $id);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
  }