<?php

class Admin extends Controller {

public function __construct(){
  if(!isLoggedIn()){
    redirect('users/login');
  }

  $this->postModel = $this->model('Post');
  $this->userModel = $this->model('User');
  $this->locationModel = $this->model('Location');
  $this->categoryModel = $this->model('Category');
}


public function index(){
  // Get posts
  $posts = $this->postModel->getPosts();

  $data = [
    'posts' => $posts
  ];

  $this->view('admin/index', $data);
}


public function users(){
  // Get posts
  $users = $this->userModel->getUsers();

  $data = [
    'users' => $users
  ];

  $this->view('admin/users', $data);
}

public function locations(){

  // Get posts
  $locations = $this->locationModel->getLocations();

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // Sanitize POST array
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    $data = [
      'locations' => $locations,
      'city' => trim($_POST['city']),
      'country' => trim($_POST['country']),
      'city_err' => '',
      'country_err' => ''
    ];

    // Validate data
    if(empty($data['city'])){
      $data['city_err'] = 'Please enter city';
    }
    if(empty($data['country'])){
      $data['country_err'] = 'Please enter country text';
    }

    // Make sure no errors
    if(empty($data['city_err']) && empty($data['country_err'])){
      // Validated
      if($this->locationModel->addLocation($data)){
        flash('location_message', 'Location Added');
        redirect('admin/locations');
      } else {
        die('Something went wrong');
      }
    } else {
      // Load view with errors
      $this->view('admin/locations', $data);
    }

  } else {
    $data = [
      'locations' => $locations,
      'city' => '',
      'country' => '',
      'city_err' => '',
      'country_err' => ''
    ];

    $this->view('admin/locations', $data);
  }
}


public function categories() {
  if($_SERVER['REQUEST_METHOD'] == 'POST') {

  }

  else {

    $data = [
      'category_image' => '',
      'category_text' => '',
      'category_text_err' => '',
      'category_image_err' => ''
    ];

    $this->view('admin/categories', $data);
  }
}


public function deleteLocation($id = NULL) {

  if  ($this->locationModel->deleteLocation($id)) {
      flash('location_message', 'Post Removed');
      redirect('admin/locations');
    } else {
      die('something went wrong');
    }
  }






}

 ?>
