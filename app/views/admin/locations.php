
<?php require APPROOT . '/views/inc/admin.php'; ?>

<div class="container">



<h2>Locations</h2>

<?php flash('location_message'); ?>
    <table class="table table-striped">
      <thead>
        <tr>

          <th>ID</th>
          <th>Stadt</th>
          <th>Land</th>
          <th><em>Aktionen</em></th>


        </tr>
      </thead>
      <tbody>
        <?php foreach ($data['locations'] as $location): ?>
          <tr>
            <td><?php echo $location->id; ?></td>
            <td><?php echo $location->city; ?></td>
            <td><?php echo $location->country; ?></td>
            <td> <a href="<?php echo URLROOT; ?>/admin/deleteLocation/<?php echo $location->id; ?>"><button class="text-white btn btn-danger" type="button" name="button">DELETE</button></a> </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>




      <div class="card card-body bg-light mt-5 mb-5">
        <h2>Add Location</h2>
        <p>Create a post with this form</p>
        <form action="<?php echo URLROOT; ?>/admin/locations" method="post">
          <div class="form-group">
            <label for="city">City: <sup>*</sup></label>
            <input type="text" name="city" class="form-control form-control-lg <?php echo (!empty($data['city_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['city']; ?>">
            <span class="invalid-feedback"><?php echo $data['city_err']; ?></span>
          </div>
          <div class="form-group">
            <label for="country">Country: <sup>*</sup></label>
            <textarea name="country" class="form-control form-control-lg <?php echo (!empty($data['country_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['country']; ?></textarea>
            <span class="invalid-feedback"><?php echo $data['country_err']; ?></span>
          </div>
          <input type="submit" class="btn btn-success" value="Submit">
        </form>
      </div>
      </div>




<?php require APPROOT . '/views/inc/footer.php'; ?>
