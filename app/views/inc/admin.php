<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/admin.css">
  <title><?php echo SITENAME; ?></title>
  <script src="https://kit.fontawesome.com/a0e5860447.js" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
	  <a class="navbar-brand col-sm-4 col-md-2 mr-0" href="#">My Site</a>

	  <ul class="navbar-nav px-3 flex-row">
      <li class="nav-item px-3 text-nowrap">
	      <a class="nav-link" href="<?php echo URLROOT; ?>/posts/index">Back to Homepage</a>
	    </li>
	    <li class="nav-item px-3 text-nowrap">
	      <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout">Logout</a>
	    </li>
	  </ul>
	</nav>
	<div class="container-fluid">
	    <div class="row navbar-expand-md">
	        <nav class="col-md-3 col-lg-2 bg-light navbar-collapse collapse sidebar" id="sidenav">
	            <div class="sidebar-sticky flex-column w-100 mt-1" id='adminPanels'>
								<ul class="nav flex-column">
									<li class="nav-item">
											<a class="nav-link" href="<?php echo URLROOT; ?>/admin/index">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Dashboard <span class="sr-only">(current)</span>
											</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?php echo URLROOT; ?>/admin/users">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg> Users
										</a>
									</li>
									<li class="nav-item">
											<a class="nav-link" href="<?php echo URLROOT; ?>/admin/posts">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg> Posts
											</a>
									</li>

									<li class="nav-item">
											<a class="nav-link" href="<?php echo URLROOT; ?>/admin/categories">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg> Categories
											</a>
									</li>
									<li class="nav-item">
											<a class="nav-link" href="<?php echo URLROOT; ?>/admin/locations">
													<img src="<?php echo URLROOT; ?>/img/location.svg" alt="location"> Location
											</a>
									</li>
								</ul>


	            </div>
	        </nav>

	        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
	            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
	                <h1 class="h2">Dashboard</h1>

	                <div class="btn-toolbar mb-2 mb-md-0">
	                    <div class="btn-group mr-2">
	                        <button class="btn btn-sm btn-outline-secondary">Share</button>
	                        <button class="btn btn-sm btn-outline-secondary">Export</button>
	                    </div>

	                </div>
	            </div>



	        </main>
	    </div>
	</div>
