<div id="profile_container">

  <?php
  // var_dump($user);
  // var_dump($followers);
  // var_dump($followed);
  var_dump($users);
  ?>

  <section>

    <!-- /* ------------------------ picture & name container ------------------------ */ -->
    <div class="container py-5">

      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">

              <!-- profile picture auto send form -->
              <form action="?controller=user&action=profile_picture" class="img-form" id="img_form" enctype="multipart/form-data" method="POST">
                <div class="upload">
                <img src="Public/img/<?= $user['user_info'][0]->image_name ?>" width=125 height=125 alt="" title="<?= $user['user_info'][0]->image_name ?>">

                  <div class="round">
                    <input type="hidden" name="user_id" value="<?= $user['user_info'][0]->user_id ?>">
                    <input type="hidden" name="username" value="<?= $user['user_info'][0]->username ?>">
                    <input type="file" name="img_input" id="img_input" accept="image/*" capture="camera">
                    <i class="fa fa-camera" style="color: #fff"></i>
                  </div>
                </div>
              </form>
              <!-- first and lastname container -->
              <h5 class="my-3"><?php echo $user['user_info'][0]->firstname . "&nbsp" . $user['user_info'][0]->lastname; ?></h5>
              <p class="text-muted mb-4"><?php echo $user['user_info'][0]->roles ?></p>

              <!-- followers container -->
              <div class="d-flex justify-content-evenly mb-2">
                <a href="?controller=user&action=all_followers&id=<?= $_SESSION['id'] ?>">
                  <p class="mb-4 text-primary fw-bold"><?= $followers[0]->total_followers ?> abonnés </p>
                </a>

                <a href="?controller=user&action=all_followed&id=<?= $_SESSION['id'] ?>">
                  <p class="mb-4 text-primary fw-bold"><?php echo $followed[0]->total_followed ?> abonnements</p>
                </a>
              </div>

            </div>

          </div>
          <!-- /* ------------------------------ modify button ----------------------------- */ -->
          <div class="d-flex justify-content-center mb-2">
            <a href="?controller=user&action=user_profile_edit"><button type="button" class="btn btn-outline-primary btn-sm">Modifier ses infos</button></a>
          </div>

        </div>
        

        <!-- /* --------------------------- user info container -------------------------- */ -->
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">

              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Nom</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?php echo $user['user_info'][0]->lastname ?></p>
                </div>
              </div>

              <hr>

              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Prénom</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?php echo $user['user_info'][0]->firstname ?></p>
                </div>
              </div>

              <hr>

              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Nom d'utilisateur</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?php echo $user['user_info'][0]->username ?></p>
                </div>
              </div>

              <hr>

              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?php echo $user['user_info'][0]->email ?></p>
                </div>
              </div>

              <hr>

              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Date de naissance</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?= date("d-m-Y", strtotime($user['user_info'][0]->birthdate)) ?></p>
                </div>
              </div>

              <hr>

              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Inscrit depuis le :</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0"><?= date("d-m-Y", strtotime($user['user_info'][0]->created_at)) ?></p>
                </div>
              </div>

            </div>
          </div>
          <!-- /* ----------------------- end of user infos container ---------------------- */ -->

    

          <!-- /* -------------------------- mini cards container -------------------------- */ -->
          <div class="container d-flex flex-wrap justify-content-between gap-xl-3 gap-md-3 gap-sm-3 gap-3">
            
            <!-- <div class="container d-flex flex-wrap col-xl-8 col-md-9 col-sm-10 col-12 gap-xl-3 gap-md-3 gap-sm-3 gap-3 border"> -->

              <div class="card-profile col-xl-3 col-md-4 col-sm-5 col-5">
                <div class="card ">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <i class="fa-solid fa-bolt fa-xl" style="color: rgb(255, 174, 0);"></i>
                      </div>
                      <div class="col ">
                        <h5 class="card-profile-title fs-4"><?= $user['games_info'][0]->total_points ?></h5>
                        <p class="card-profile-text  fw-light text-muted">points gagnés</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-profile col-xl-3 col-md-4 col-sm-5 col-5">
                <div class="card ">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <i class="fa-solid fa-gamepad fa-xl" style="color: #74C0FC;"></i>
                      </div>
                      <div class="col ">
                        <h5 class="card-profile-title fs-4"><?= $user['games_info'][0]->total_games ?></h5>
                        <p class="card-profile-text  fw-light text-muted">parties jouées</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card-profile col-xl-3 col-md-4 col-sm-5 col-5">
                <div class="card">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col-auto">
                        <i class="fa-solid fa-bullseye fa-xl me-2" style="color: rgb(38, 192, 18, 0.664);"></i>
                      </div>
                      <div class="col">
                        <h5 class="card-profile-title fs-4"><?= $user['games_info'][0]->success_rate ?> %</h5>
                        <p class="card-profile-text  fw-light text-muted">réussite moyenne</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            <!-- </div> -->

          </div>

        </div>


      </div>
    </div>

  </section>



</div>