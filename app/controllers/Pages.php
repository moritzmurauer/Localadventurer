<?php
  class Pages extends Controller {
    public function __construct(){
    }

    public function index(){

      if(isLoggedIn()) {
        redirect('posts');
      }

      $data = [
        'title' => 'localadventurer',
        'description' => 'simple MVC setup'
      ];

      $this->view('pages/index', $data);
    }


    public function adventures(){
      $data = [
        'title' => 'adventures',
        'description' => 'adventures'
      ];

      $this->view('pages/adventures', $data);
    }




    public function event(){
      $data = [
        'title' => 'event',
        'description' => 'event descirption'
      ];

      $this->view('pages/event', $data);
    }
  }
