<?php require APPROOT . '/views/inc/header.php'; ?>

<?php var_dump($data) ?>

  <a href="<?php echo URLROOT; ?>/posts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
  <div class="card card-body bg-light mt-5">
    <h2>Edit</h2>
    <p>Create a post with this form</p>
    <form action="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['id']; ?>" method="post">

      <div class="form-group">
        <label for="title">Title: <sup>*</sup></label>
        <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>">
        <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
      </div>


      <div class="form-group">
        <label for="categories_id">Aktuelle Category:

          <sup>*</sup></label>

        <select class="form-control" name="categories_id">
          <?php foreach ($data['categories'] as $category): ?>
            <option value="<?php echo $category->id ?>"><?php echo $category->category_type ?>
            </option>
          <?php endforeach ?>
        </select>
      </div>

      <div class="form-group">
        <label for="image_url">Image Upload: <sup>*</sup></label>
        <input name="image" type="file" accept="image/*">
      </div>

      <div class="form-group">
        <label for="locations_id">Location: <sup>*</sup></label>
        <select class="form-control" name="locations_id">
          <?php foreach ($data['locations'] as $location): ?>
            <option value="<?php echo $location->id ?>"><?php echo $location->city . ' | ' . $location->country ?>
            </option>
          <?php endforeach ?>
        </select>
      </div>

      <div class="form-group">
        <label for="body">Body: <sup>*</sup></label>
        <textarea name="body" class="form-control form-control-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['body']; ?></textarea>
        <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
      </div>

      <input type="submit" class="btn btn-success" value="Submit">
    </form>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
