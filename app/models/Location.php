<?php
  class Location {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function getLocations(){
      $this->db->query('SELECT *
                        FROM locations
                        ');

      $results = $this->db->resultSet();

      return $results;
    }


    public function addLocation($data){
      $this->db->query('INSERT INTO locations (city, country) VALUES(:city, :country)');
      // Bind values
      $this->db->bind(':city', $data['city']);
      $this->db->bind(':country', $data['country']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


    public function updateLocation($data){
      $this->db->query('UPDATE locations SET city = :city, country = :country WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':city', $data['city']);
      $this->db->bind(':country', $data['country']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


    public function getLocationById($id) {
      $this->db->query('SELECT * FROM location WHERE id = :id');
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }


/*
    public function getLocationsByUserId($id) {
      $this->db->query('SELECT posts.*, users.name FROM `posts` INNER JOIN users ON posts.user_id = users.id WHERE posts.user_id = :id');
      $this->db->bind(':id', $id);

      $results = $this->db->resultSet();

      return $results;
    }
  */

    public function deleteLocation($id) {
      $this->db->query('DELETE FROM locations WHERE id = :id');
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
