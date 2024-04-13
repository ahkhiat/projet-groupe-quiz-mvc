
<!------------------------ Admin navbar --------------------->
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Administration dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item me-4">
        <a class="nav-link" href="?controller=game&action=all_games">Parties</a>
        </li>
        <li class="nav-item me-4">
          <a class="nav-link" href="?controller=question&action=all_questions">Questions</a>
        </li>
        <li class="nav-item me-4">
          <a class="nav-link" href="?controller=theme&action=all_themes">Thèmes</a>
        </li>
        <li class="nav-item me-4">
          <a class="nav-link" href="?controller=user&action=all_users">Utilisateurs</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>


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
                <div class="card-header">Nombre de questions en BDD</div>
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
            </div>
        </div>

    </div>

    <!-- Row 2 -->
    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-header">Durée par question (s)</div>
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

    


    







