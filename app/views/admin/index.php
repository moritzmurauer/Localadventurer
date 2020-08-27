<?php require APPROOT . '/views/inc/admin.php'; ?>



  <div class="container">
    
    <p>Hello <?= $_SESSION['user_name'] ?>, you're are logged in as <strong>Admin</strong>.<br></p>

    <div class="row mb-3">
      <div class="col-xl-3 col-sm-6 py-2">
          <div class="card bg-success text-white h-100">
              <div class="card-body bg-success">
                  <div class="rotate">
                      <i class="fa fa-user fa-4x"></i>
                  </div>
                  <h6 class="text-uppercase">Users</h6>
                  <h1 class="display-4">134</h1>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-sm-6 py-2">
          <div class="card text-white bg-danger h-100">
              <div class="card-body bg-danger">
                  <div class="rotate">
                      <i class="fa fa-pencil-square-o fa-4x"></i>
                  </div>
                  <h6 class="text-uppercase">Posts</h6>
                  <h1 class="display-4">87</h1>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-sm-6 py-2">
          <div class="card text-white bg-info h-100">
              <div class="card-body bg-info">
                  <div class="rotate">
                      <i class="fa fa-list-alt fa-4x"></i>
                  </div>
                  <h6 class="text-uppercase">Categories</h6>
                  <h1 class="display-4">125</h1>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-sm-6 py-2">
          <div class="card text-white bg-warning h-100">
              <div class="card-body">
                  <div class="rotate">
                      <i class="fa fa-share fa-4x"></i>
                  </div>
                  <h6 class="text-uppercase">Example</h6>
                  <h1 class="display-4">36</h1>
              </div>
          </div>
      </div>
  </div>


  <h2>Posts</h2>
    	<table class="table table-striped">
    		<thead>
    			<tr>

    				<th>ID</th>
    				<th>User</th>
    				<th>Post Name</th>
    				<th>Text</th>
    				<th>erstellt am</th>
    				<th><em>Aktionen</em></th>


    			</tr>
    		</thead>
    		<tbody>
    			<?php foreach ($data['posts'] as $post): ?>
    				<tr>
    					<td><?php echo $post->id; ?></td>
    					<td><?php echo $post->name; ?></td>
              <td><?php echo $post->title; ?></td>
              <td><?php echo $post->body; ?></td>
    					<td><?php echo $post->created_at; ?></td>
    					<td>
              </td>
    				</tr>
    			<?php endforeach ?>
    		</tbody>


    	</table>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
