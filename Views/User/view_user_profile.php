


<section>
  <div class="container py-5">
    
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
          <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
            <h5 class="my-3"><?php echo $user[0]->firstname . "&nbsp" . $user[0]->lastname; ?></h5>
            <p class="text-muted mb-1"><?php echo $user[0]->roles ?></p>
          </div>
        </div>
      </div>

      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nom</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $user[0]->lastname ?></p>
              </div>
            </div>

            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Prénom</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $user[0]->firstname ?></p>
              </div>
            </div>

            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $user[0]->email ?></p>
              </div>
            </div>
            
            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Date de naissance</p>
              </div>
              <div class="col-sm-9">
              <p class="text-muted mb-0"><?= date("d-m-Y", strtotime($user[0]->birthdate)) ?></p>
              </div>
            </div>

            <hr>

            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Inscrit depuis le :</p>
              </div>
              <div class="col-sm-9">
              <p class="text-muted mb-0"><?= date("d-m-Y", strtotime($user[0]->created_at)) ?></p>              </div>
            </div>

          </div>
        </div>

        <div class="d-flex justify-content-center mb-2">
              <a href="?controller=user&action=user_profile_edit"><button type="button" class="btn btn-primary">Modifier</button></a>
        </div>

      </div>
    </div>
  </div>
</section>



<!-- <div class="container">
    <div class="main-body">

        <div class="row gutters-sm mt-5">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4>
                                    <?= $user[0]->firstname ?>
                                    <?= $user[0]->lastname ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-8 col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Nom :</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?= $user[0]->lastname ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Prénom :</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?= $user[0]->firstname ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email :</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?= $user[0]->email ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Date de naissance :</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?= date("d-m-Y", strtotime($user[0]->birthdate)) ?>

                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Inscrit depuis le :</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?= date("d-m-Y", strtotime($user[0]->created_at)) ?>

                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <a class="btn btn-info " href="?controller=user&action=edit_profil_user">Modifier</a>
                            </div>
                        </div>
                    </div>
                </div> -->