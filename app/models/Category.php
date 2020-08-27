<?php
  class Category {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function getCategories(){
      $this->db->query('SELECT *
                        FROM categories
                        ');

      $results = $this->db->resultSet();

      return $results;
    }


    public function categories($data){
      $this->db->query('INSERT INTO categories (category_image, category_type) VALUES(:category_image, :category_type)');
      // Bind values
      $this->db->bind(':category_image', $data['category_image']);
      $this->db->bind(':category_type', $data['category_type']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

  }
