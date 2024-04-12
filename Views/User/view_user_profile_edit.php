
<div class="container py-5">
    <div class="main-body">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                            <div class="mt-3">
                                <h4><?= $_SESSION['lastname'] ?> <?= $_SESSION['firstname'] ?></h4>
                                
                            </div>
                        </div>
                        <hr class="my-4">
                     
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        
                        <form action="?controller=user&action=user_profile_edit_request" method="POST">
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                <p class="mb-0">Nom</p>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" id="" value="<?= $user[0]->lastname ?>" name="lastname">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                <p class="mb-0">Prenom</p>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" id="" value="<?= $user[0]->firstname ?>" name="firstname">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="email" class="form-control" value="<?= $user[0]->email ?>" name="email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                <p class="mb-0">Date de naissance</p>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="date" class="form-control" id="" value="<?= $user[0]->birthdate ?>" name="birthdate">
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="hidden" name="" id="" value="<?php echo $_SESSION['id'] ?>">
                                    <button type="submit" class="btn btn-primary px-4" value="Save Changes">Modifier</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>