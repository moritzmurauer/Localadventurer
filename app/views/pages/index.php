<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="wrapper">
  <div class="container main">
    <div class="head img-responsive">
      <img class="position-relative" src="<?php echo URLROOT; ?>/img/coverbild.svg" alt="coverbild">
    </div>


<div class="container">
	<div class="row">
		<div class="col-8">
      <h1>Finde dein nächstes Abenteuer!</h1>
    </div>
    <div class="col-4 d-flex justify-content-end">
      <button class="btn btn-primary" type="button" name="button"> <a href="<?php echo URLROOT; ?>/users/register" >Joine der Community!</a></button>
    </div>
	</div>
</div>

<<div class="row">
          <div class="col-12">
          <div class="card search-box-outer shadow bg-white rounded">
            <div class="container">
              <div class="card search">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Find your next Adventure!</option>
                    <?php while ($row = mysqli_fetch_assoc($cityObj)): ?>
                    <option><?= $row['city'] . ", " . $row['country']?></option>
                    <?php endwhile ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>


  <div class="container box">
    <div class="headline">
      <h2>Abenteuer in der Nähe von <?php echo 'Hamburg, DE' ?></h2>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
      <div class="card">
        <img class="card-img" src="img/boot.jpg" alt="Altstadt hamburg boot">
        <div class="card-img-overlay">
          <a href="#" class="btn btn-light btn-sm">Jungle</a>
        </div>
        <div class="card-body">
          <h4 class="card-title">Abenteuer hier einfügen</h4>
          <small class="text-muted cat">
            subheadline hier einfügen
          </small>
          <p class="card-text">I love quick, simple pasta dishes, and this is one of my favorite.</p>
          <a href="#" class="btn btn-info">Lese mehr!</a>
        </div>
        <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
          <div class="date">Oct 20, 12:45PM</div>
          <div class="stats">
						<p>Niklas Bae</p>
          </div>

        </div>
      </div>
    </div>

    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
      <div class="card">
        <img class="card-img" src="img/rummel.jpg" alt="rummel">
        <div class="card-img-overlay">
          <a href="#" class="btn btn-light btn-sm">Urban</a>
        </div>
        <div class="card-body">
          <h4 class="card-title">Abenteuer hier einfügen</h4>
          <small class="text-muted cat">
            <i class="far fa-clock text-info"></i> 30 minutes
            <i class="fas fa-users text-info"></i> 4 portions
          </small>
          <p class="card-text">I love quick, simple pasta dishes, and this is one of my favorite.</p>
          <a href="#" class="btn btn-info">Lese mehr!</a>
        </div>
        <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
          <div class="date">Oct 20, 12:45PM
          </div>
          <div class="stats">
						<p>Lisa Müller</p>
          </div>

        </div>
      </div>
    </div>

    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
      <div class="card">
        <img class="card-img" src="img/suppen.jpg" alt="Stand Up Paddle">
        <div class="card-img-overlay">
          <a href="#" class="btn btn-light btn-sm">Outdoor</a>
        </div>
        <div class="card-body">
          <h4 class="card-title">Abenteuer hier einfügen</h4>
          <small class="text-muted cat">
            <i class="far fa-clock text-info"></i> 30 minutes
            <i class="fas fa-users text-info"></i> 4 portions
          </small>
          <p class="card-text">I love quick, simple pasta dishes, and this is one of my favorite.</p>
          <a href="#" class="btn btn-info">Lese mehr!</a>
        </div>
        <div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
          <div class="date">Oct 20, 12:45PM
          </div>
          <div class="stats">
           	<p>Peter Lustig</p>
          </div>

        </div>
      </div>
			<div class="d-flex justify-content-end">
				<button class="btn btn-primary" type="button" name="button"><a href="<?php echo URLROOT; ?>/pages/adventures">See all</a></button>
			</div>
    </div>


  </div>

  <div class="container box">

    <div class="headline">
      <h2>Suche Abenteuer nach Kategorie</h2>
    </div>

  <div class="row">
    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
      <div class="card">
        <img class="card-img-top" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/bologna-1.jpg" alt="Bologna">
        <div class="card-body">
          <h4 class="card-title">Bologna</h4>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
      <div class="card">
        <img class="card-img-top" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/bologna-1.jpg" alt="Bologna">
        <div class="card-body">
          <h4 class="card-title">Bologna</h4>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
      <div class="card">
        <img class="card-img-top" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/bologna-1.jpg" alt="Bologna">
        <div class="card-body">
          <h4 class="card-title">Bologna</h4>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
      <div class="card">
        <img class="card-img-top" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/bologna-1.jpg" alt="Bologna">
        <div class="card-body">
          <h4 class="card-title">Bologna</h4>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
      <div class="card">
        <img class="card-img-top" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/bologna-1.jpg" alt="Bologna">
        <div class="card-body">
          <h4 class="card-title">Bologna</h4>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
      <div class="card">
        <img class="card-img-top" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/bologna-1.jpg" alt="Bologna">
        <div class="card-body">
          <h4 class="card-title">Bologna</h4>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
      <div class="card">
        <img class="card-img-top" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/bologna-1.jpg" alt="Bologna">
        <div class="card-body">
          <h4 class="card-title">Bologna</h4>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
      <div class="card">
        <img class="card-img-top" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/bologna-1.jpg" alt="Bologna">
        <div class="card-body">
          <h4 class="card-title">Bologna</h4>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
      <div class="card">
        <img class="card-img-top" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/bologna-1.jpg" alt="Bologna">
        <div class="card-body">
          <h4 class="card-title">Bologna</h4>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
</div>




<?php require APPROOT . '/views/inc/footer.php'; ?>
