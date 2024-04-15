<?php 
// var_dump($user['user_info']);
// var_dump($user['games_info']);
?>
<div class="row gutters-sm">
  <div class="profile-image-container upload container mb-3 mt-3 col-xl-8 col-md-8 col-sm-8 col-10">
    <img src="Public/img/<?= $user['user_info'][0]->image_name ?>" width=125 height=125 alt="" title="<?= $user['user_info'][0]->image_name ?>">
    <form action="" class="img-form" id="img_form" enctype="multipart/form-data" method="POST">
      <div class="upload">
        <!-- <img src="Public/img/<?= $user ?>" alt=""> -->
      </div>
    </form>


  </div>
<hr>
  <div class="mx-auto  col-xl-8 col-md-8 col-sm-8 col-10 ps-4">
    <div class="fw-bold fs-3">
      <?= $user['user_info'][0]->firstname ?>
    </div>
    <div class="fw-light fs-6 text-muted">
      <?= $user['user_info'][0]->username ?>
    </div>
    <div class="fw-light fs-6 text-muted">
    Membre depuis <?= (new DateTime($user['user_info'][0]->created_at))->format("F Y") ?>
    </div>
  </div>
  <div class="col-sm-9 text-secondary">
  </div>
</div>

<hr>
<div class="container d-flex flex-wrap col-xl-8 col-md-9 col-sm-10 col-12 gap-xl-5 gap-md-5 gap-sm-5 gap-3 mx-auto">
    <div class="card-profile col-xl-3 col-md-3 col-sm-5 col-5">
      <div class="card " >
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

    <div class="card-profile col-xl-3 col-md-3 col-sm-5 col-5">
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

    <div class="card-profile col-xl-3 col-md-3 col-sm-5 col-5">
      <div class="card">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col-auto">
            <i class="fa-solid fa-bullseye fa-xl me-2" style="color: rgb(38, 192, 18, 0.664);" ></i>            
            </div>
            <div class="col">
              <h5 class="card-profile-title fs-4"><?= $user['games_info'][0]->success_rate ?> %</h5>
              <p class="card-profile-text  fw-light text-muted">réussite moyenne</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- 
<div class="d-flex flex-column align-items-center text-center">
  <div class="col-md-8">
    <div class="card mb-3">
      <div class="card-body">
        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Nom</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <?= $user[0]->lastname ?>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Prénom</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <?= $user[0]->firstname ?>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-3">
            <h6 class="mb-0">Date d'inscription</h6>
          </div>
          <div class="col-sm-9 text-secondary">
            <?= date("d-m-Y", strtotime($user[0]->created_at)) ?>
          </div>
          <hr>

        </div>
        <hr>
      </div>
    </div>
  </div> -->