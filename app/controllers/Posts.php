<?php
  class Posts extends Controller {
    public function __construct(){
      if(!isLoggedIn()){
        redirect('users/login');
      }

      $this->postModel = $this->model('Post');
      $this->userModel = $this->model('User');
      $this->categoryModel = $this->model('Category');
      $this->locationModel = $this->model('Location');
    }

    public function index(){
      // Get posts
      $posts = $this->postModel->getPostsByUserId($_SESSION['user_id']);

      $data = [
        'posts' => $posts
      ];

      $this->view('posts/index', $data);
    }


    public function add(){

      $categories = $this->categoryModel->getCategories();
      $locations = $this->locationModel->getLocations();

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // FILE UPLOAD BEGIN
        include_once( __DIR__  . '/../models/Image.php' );
        $FileUpload = new Image();
        $files =  $FileUpload->uploadImg( 'image', '/uploads', [ 128, 128 ] );

        // FILE UPLOAD END

        $data = [
          'categories' => $categories,
          'locations' => $locations,
          'title' => trim($_POST['title']),
          'body' => trim($_POST['body']),
          'categories_id' => trim($_POST['categories_id']),
          'locations_id' => trim($_POST['locations_id']),
          'image_url' => trim($files[ 'image' ]),
          'thumb_url' => trim($files[ 'thumbnail' ]),
          'user_id' => $_SESSION['user_id'],
          'title_err' => '',
          'body_err' => '',
          'image_url_err' => '',
        ];

        // Validate data
        if(empty($data['title'])){
          $data['title_err'] = 'Please enter title';
        }
        if(empty($data['body'])){
          $data['body_err'] = 'Please enter body text';
        }

        // Make sure no errors
        if(empty($data['title_err']) && empty($data['body_err'])){
          // Validated
          if($this->postModel->addPost($data)){
            flash('post_message', 'Post Added');
            redirect('posts');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('posts/add', $data);
        }

      } else {
        $data = [
          'categories' => $categories,
          'locations' => $locations,
          'title' => '',
          'body' => '',
          'categories_id' => '',
          'locations_id' => '',
          'image_url' => '',
          'user_id' => '',
          'title_err' => '',
          'body_err' => '',
          'image_url_err' => '',
        ];

        $this->view('posts/add', $data);
      }
    }







    public function edit($id = NULL){

      $post = $this->postModel->getPostById($id);
      $categories = $this->categoryModel->getCategories();
      $locations = $this->locationModel->getLocations();

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST array
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


        include_once( __DIR__  . '/../models/Image.php' );
        $FileUpload = new Image();
        $files =  $FileUpload->uploadImg( 'image', '/uploads', [ 128, 128 ] );

        $data = [
          'id' => $id,
          'categories' => $categories,
          'locations' => $locations,
          'title' => trim($_POST['title']),
          'body' => trim($_POST['body']),
          'categories_id' => trim($_POST['categories_id']),
          'locations_id' => trim($_POST['locations_id']),
          'image_url' => trim($files[ 'image' ]),
          'thumb_url' => trim($files[ 'thumbnail' ]),
          'user_id' => $_SESSION['user_id'],
          'title_err' => '',
          'body_err' => '',
          'image_url_err' => '',
        ];

        // Validate data
        if(empty($data['title'])){
          $data['title_err'] = 'Please enter title';
        }
        if(empty($data['body'])){
          $data['body_err'] = 'Please enter body text';
        }

        // Make sure no errors
        if(empty($data['title_err']) && empty($data['body_err'])){
          // Validated
          if($this->postModel->updatePost($data)){
            flash('post_message', 'Post Updated');
            redirect('posts');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('posts/edit', $data);
        }

      } else {
        // Get existing post from model
        $post = $this->postModel->getPostById($id);

        // Check for owner
        if($post->user_id != $_SESSION['user_id']){
          redirect('posts');
        }

        $data = [
          'id' => $id,
          'categories' => $categories,
          'locations' => $locations,
          'categories_id' => $post->categories_id,
          'locations_id' => $post->locations_id,
          'title' => $post->title,
          'body' => $post->body
          /*
          'image_url' => $post->image_url,
          'thumb_url' => $post->thumb_url
          */
        ];

        $this->view('posts/edit', $data);
      }
    }


    public function show($id) {
      $post = $this->postModel->getPostById($id);
      $user = $this->userModel->getUserById($post->user_id);

      $data = [
        'post' => $post,
        'user' => $user
      ];
      $this->view('posts/show', $data);
    }


    public function delete($id) {
      if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if($this->postModel->deletePost($id)) {
          flash('post_message', 'Post Removed');
          redirect('posts');
        } else {
          die('something went wrong');
        }
      } else {
        redirect('posts');
      }
    }



  }
