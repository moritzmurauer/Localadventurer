<?php
  class Post {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function getPosts(){
      $this->db->query('SELECT *,
                        posts.id as postId,
                        users.id as userId,
                        posts.created_at as postCreated,
                        users.created_at as userCreated
                        FROM posts
                        LEFT JOIN users
                        ON posts.user_id = users.id
                        ORDER BY posts.created_at DESC
                        ');

      $results = $this->db->resultSet();

      return $results;
    }


    public function addPost($data){
      $this->db->query('INSERT INTO posts (title, user_id, body, categories_id, locations_id, image_url, thumb_url) VALUES(:title, :user_id, :body, :categories_id, :locations_id, :image_url, :thumb_url)');
      // Bind values
      $this->db->bind(':title', $data['title']);
      $this->db->bind(':user_id', $data['user_id']);
      $this->db->bind(':body', $data['body']);
      $this->db->bind(':categories_id', $data['categories_id']);
      $this->db->bind(':locations_id', $data['locations_id']);
      $this->db->bind(':image_url', $data['image_url']);
      $this->db->bind(':thumb_url', $data['thumb_url']);
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


    public function updatePost($data){
      $this->db->query('UPDATE posts SET title = :title, body = :body, categories_id = :categories_id, locations_id = :locations_id, image_url = :image_url, thumb_url = :thumb_url  WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':title', $data['title']);
      $this->db->bind(':body', $data['body']);
      $this->db->bind(':categories_id', $data['categories_id']);
      $this->db->bind(':locations_id', $data['locations_id']);
      $this->db->bind(':image_url', $data['image_url']);
      $this->db->bind(':thumb_url', $data['thumb_url']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


    public function getPostById($id) {
      $this->db->query('SELECT posts.*,  users.name, categories.category_type, categories.category_image, locations.city, locations.country
                        FROM `posts` INNER JOIN users ON posts.user_id = users.id
                        INNER JOIN categories ON posts.categories_id = categories.id
                        INNER JOIN locations ON posts.locations_id = locations.id
                        WHERE posts.id = :id');
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }

    public function getPostsByUserId($id) {
      $this->db->query("SELECT posts.*,  users.name, categories.category_type, categories.category_image, locations.city, locations.country
                        FROM `posts` INNER JOIN users ON posts.user_id = users.id
                        INNER JOIN categories ON posts.categories_id = categories.id
                        INNER JOIN locations ON posts.locations_id = locations.id
                        WHERE posts.user_id = :id"
                        );



      $this->db->bind(':id', $id);

      $results = $this->db->resultSet();

      return $results;
    }

    public function deletePost($id) {
      $this->db->query('DELETE FROM posts WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $id);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
  }
