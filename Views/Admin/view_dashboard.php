
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h2 class="h3 mb-0 text-gray-800">Panneau d'administration</h2>
                        
                    </div>

                    <!-- Links Container -->
                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Links</h6>
                                    
                                </div>

                                <div class="card-body">
                                    <div class="chart-area d-flex flex-row justify-content-around">
                                        <a href="?controller=game&action=all_games" class="btn btn-primary">Parties</a>
                                        <a href="?controller=question&action=all_questions" class="btn btn-primary">Questions</a>
                                        <a href="?controller=theme&action=all_themes" class="btn btn-primary">Thèmes</a>
                                        <a href="?controller=user&action=all_users" class="btn btn-primary">Utilisateurs</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Row 1 -->
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                Nombre d'inscrits</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $users ?> </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-user fa-2xl"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                Nombre de parties jouées</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $games ?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-gamepad fa-2xl"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                Nombre de questions en BDD</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $questions ?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-database fa-2xl"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                Nombre de questions par Quiz</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $nbr_questions ?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-clipboard-question fa-2xl"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Row 2 -->
                    <div class="row">

                        

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                Durée par question (s)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $quiz_duration ?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa-solid fa-stopwatch fa-2xl"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    // var_dump($nbr_questions_themes);
                        foreach($nbr_questions_themes as $nqt){
                            echo '
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                 '.
                                                 $nqt->theme_name
                                                 .' (Nbe Questions)
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                 '.
                                                 $nqt->Total_questions
                                                 .'
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                            <i class="fa-solid fa-puzzle-piece fa-2xl"></i>                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ';
                        }
                    ?>
                        

                        

                    </div>


                    <!-- Action Container -->
                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Actions</h6>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="chart-area d-flex flex-column">
                                        <div class="w-25 mb-3">
                                            <form action="?controller=admin&action=nbr_questions" method="POST">
                                                <label for="nbr_questions" class="form-label">Nb de questions par quiz</label>
                                                <div class="d-flex">
                                                    <input type="text" class="form-control me-3" id="nbr_questions" name="nbr_questions">
                                                    <button type="submit" class="btn btn-primary">Changer</button>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="w-25 mb-3">
                                            <form action="?controller=admin&action=quiz_duration" method="POST">
                                                <label for="nbr_questions" class="form-label">Durée par question</label>
                                                <div class="d-flex">
                                                    <input type="text" class="form-control me-3" id="quiz_duration" name="quiz_duration">
                                                    <button type="submit" class="btn btn-primary">Changer</button>
                                                </div>
                                            </form>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                <!-- End Container fluid -->
                </div>

                    


                    

                

    
   

  
