<?php require APPROOT . '/views/inc/admin.php'; ?>

<div class="container">


<h2>Users</h2>
    <table class="table table-striped">
      <thead>
        <tr>

          <th>ID</th>
          <th>Username</th>
          <th>Email</th>
          <th>Passwort</th>
          <th>Erstellt am</th>
          <th>Status</th>
          <th><em>Aktionen</em></th>


        </tr>
      </thead>
      <tbody>
        <?php foreach ($data['users'] as $user): ?>
          <tr>
            <td><?php echo $user->id; ?></td>
            <td><?php echo $user->name; ?></td>
            <td><?php echo $user->email; ?></td>
            <td><?php echo $user->password; ?></td>
            <td><?php echo $user->created_at; ?></td>
            <td><?php echo $user->status; ?></td>
            <td>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>

      </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
