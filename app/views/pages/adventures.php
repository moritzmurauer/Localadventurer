<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="row">
          <div class="col-12">
          <div class="card search-box-outer shadow bg-white rounded">
            <div class="container">
              <div class="card search">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Stadt</option>
                    <?php while ($row = mysqli_fetch_assoc($cityObj)): ?>
                    <option><?= $row['city'] . ", " . $row['country']?></option>
                    <?php endwhile ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-12">
          <div class="card search-box-outer shadow bg-white rounded">
            <div class="container">
              <div class="card search">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Kategorie</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>



        <div class="d-flex justify-content-start">
          <button class="btn btn-primary" type="button" name="button">Search</button>
        </div>
      </div>

      <hr>



      <div class="container adventures">
        <div class="adventures-head">
          <h2>Abenteuer in der Nähe von <?php echo "Hamburg, DE" ?></h2>
        </div>

        <div class="adventures-cards ">
          <a href="<?php echo URLROOT; ?>/pages/event">
          <div class="row">
            <div class="col-3">
              <img class="adventure-img " src="img/suppen_sm.jpg" alt="">
            </div>
            <div class="col-9 adventures-info">
            <small>Kategorie: Nature</small>
            <h3>Paddeln an der Alster</h3>
            <p>Hier könnt ihr euch mit Stand Up Paddel motivierten connecten und Treffen planen</p>
            <p class="primary">Mitglieder: 29</p>
            </div>
          </div>
          </a>
          <hr>
        </div>

        <div class="adventures-cards ">
          <div class="row">
            <div class="col-3">
              <img class="adventure-img " src="img/suppen_sm.jpg" alt="">
            </div>
            <div class="col-9 adventures-info">
            <small>Kategorie: Nature</small>
            <h3>Paddeln an der Alster</h3>
            <p>Hier könnt ihr euch mit Stand Up Paddel motivierten connecten und Treffen planen</p>
            <p class="primary">Mitglieder: 29</p>
            </div>
          </div>
          <hr>
        </div>

        <div class="adventures-cards ">
          <div class="row">
            <div class="col-3">
              <img class="adventure-img " src="img/suppen_sm.jpg" alt="">
            </div>
            <div class="col-9 adventures-info">
            <small>Kategorie: Nature</small>
            <h3>Paddeln an der Alster</h3>
            <p>Hier könnt ihr euch mit Stand Up Paddel motivierten connecten und Treffen planen</p>
            <p class="primary">Mitglieder: 29</p>
            </div>
          </div>
          <hr>
        </div>

        <div class="adventures-cards ">
          <a href="event.php">
          <div class="row">
            <div class="col-3">
              <img class="adventure-img " src="img/suppen_sm.jpg" alt="">
            </div>
            <div class="col-9 adventures-info">
            <small>Kategorie: Nature</small>
            <h3>Paddeln an der Alster</h3>
            <p>Hier könnt ihr euch mit Stand Up Paddel motivierten connecten und Treffen planen</p>
            <p class="primary">Mitglieder: 29</p>
            </div>
          </div>
          </a>
          <hr>
        </div>

        <div class="adventures-cards ">
          <div class="row">
            <div class="col-3">
              <img class="adventure-img " src="img/suppen_sm.jpg" alt="">
            </div>
            <div class="col-9 adventures-info">
            <small>Kategorie: Nature</small>
            <h3>Paddeln an der Alster</h3>
            <p>Hier könnt ihr euch mit Stand Up Paddel motivierten connecten und Treffen planen</p>
            <p class="primary">Mitglieder: 29</p>
            </div>
          </div>
          <hr>
        </div>

        <div class="adventures-cards ">
          <div class="row">
            <div class="col-3">
              <img class="adventure-img " src="img/suppen_sm.jpg" alt="">
            </div>
            <div class="col-9 adventures-info">
            <small>Kategorie: Nature</small>
            <h3>Paddeln an der Alster</h3>
            <p>Hier könnt ihr euch mit Stand Up Paddel motivierten connecten und Treffen planen</p>
            <p class="primary">Mitglieder: 29</p>
            </div>
          </div>
          <hr>
        </div>




        </div>
      </div>
    </div>


<?php require APPROOT . '/views/inc/footer.php'; ?>
