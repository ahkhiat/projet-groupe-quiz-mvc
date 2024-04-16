<div id="dashboard_container">
<!------------------------ Admin navbar --------------------->
<?php
include('./Utils/header_admin.php')
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Row 1 -->
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-1">
                <div class="card-header">Nombre d'inscrits</div>
                <div class="card-body">
                    <div class="row no-gutters align-items-center ">
                        <div class="col mr-2 ">
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $users ?> </div>
                        </div>
                        <div class="col-auto ">
                            <i class="fa-solid fa-user fa-2xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-header">Nombre de parties jouées</div>
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
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
            <div class="card-header">Nombre de questions en BDD</div>
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
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
            <a href="#nbr_questions" class="text-decoration-none link-dark" >
                <div class="card-header">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            Nombre de questions par quiz
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-gear"></i>
                        </div>
                    </div>
                </div>
                
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $nbr_questions ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-clipboard-question fa-2xl"></i>
                        </div>
                    </div>
                </div>
            </a>
            </div>
        </div>

    </div>

    <!-- Row 2 -->
    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
            <a href="#quiz_duration" class="text-decoration-none link-dark">
                <div class="card-header">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            Durée par question (s)                        
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-gear"></i>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $quiz_duration ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-stopwatch fa-2xl"></i>
                        </div>
                    </div>
                </div>
            </a>
            </div>
        </div>
    <?php
    // var_dump($nbr_questions_themes);
        foreach($nbr_questions_themes as $nqt){
            echo '
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-header">'.$nqt->theme_name.' (Nbe Questions)</div>
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
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
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Actions</h6>
                    
                </div>
                <div class="card-body">
                    <div class="chart-area d-flex flex-column col-xl-2 col-md-4 col-sm-4 col-6">
                        <div class=" mb-3">
                            <form action="?controller=admin&action=nbr_questions" method="POST" id="nbr_questions_form">
                                <label for="nbr_questions" class="form-label">Nb de questions par quiz</label>
                                <div class="d-flex">
                                    <input type="text" class="form-control me-3" id="nbr_questions" name="nbr_questions" value="<?= $nbr_questions ?>">
                                    <button type="submit" class="btn btn-primary" onclick="return modifyConfirmation()">Changer</button>
                                </div>
                            </form>
                        </div>

                        <div class=" mb-3">
                            <form action="?controller=admin&action=quiz_duration" method="POST" id="quiz_duration_form">
                                <label for="quiz_duration" class="form-label">Durée par question</label>
                                <div class="d-flex">
                                    <input type="text" class="form-control me-3" id="quiz_duration" name="quiz_duration" value="<?= $quiz_duration ?>">
                                    <button type="submit" class="btn btn-primary" onclick="return modifyConfirmation()">Changer</button>
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
</div>
    


    







