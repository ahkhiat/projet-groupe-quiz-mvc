<?php 
// var_dump($user);
?>
<div class="row gutters-sm">


  <div>
    <div class="card">
      <div class="card-body">
        <div class="d-flex flex-column align-items-center text-center">
          <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
          <div class="mt-3">
            <h4>
              <?= $user[0]->firstname ?>
              <?= $user[0]->lastname ?>
            </h4>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div class="d-flex flex-column align-items-center text-center">

 

    <h6 class="mb-0">Nombre de points</h6>
  </div>
  <div class="col-sm-9 text-secondary">
  </div>
</div>

<hr>
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
            <?= $user[0]->created_at | date("Y-m-d") ?>
          </div>
          <hr>

        </div>
        <hr>
      </div>
    </div>
  </div>