
<div id="profile_container">

<?php
// var_dump($user);
// var_dump($followers);
// var_dump($followed);
?>

<section>
  <div class="container py-5">
    
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">

          <!-- <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110"> -->

            <form action="?controller=user&action=profile_picture" class="img-form" id="img_form" enctype="multipart/form-data" method="POST">
              <div class="upload">
                <img src="Public/img/<?= $user[0]->image_name ?>" width=125 height=125 alt="" title="<?= $user[0]->image_name ?>">
                <div class="round">
                  <input type="hidden" name="user_id" value="<?= $user[0]->user_id ?>">
                  <input type="hidden" name="username" value="<?= $user[0]->username ?>">
                  <input type="file" name="img_input" id="img_input" accept =".jpg, .jpeg, .png">
                  <i class="fa fa-camera" style="color: #fff"></i>
                </div>
              </div>
            </form>

            <h5 class="my-3"><?php echo $user[0]->firstname . "&nbsp" . $user[0]->lastname; ?></h5>
            <p class="text-muted mb-4"><?php echo $user[0]->roles ?></p>

            <div class="d-flex justify-content-evenly mb-2">
              <p class="mb-4 text-primary fw-bold"><?= $followers[0]->total_followers ?> abonnés </p>
              
              <p class="mb-4 text-primary fw-bold"><?php echo $followed[0]->total_followed ?> abonnements</p>
            </div>

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

</div>


