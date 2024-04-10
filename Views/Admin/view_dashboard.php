
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h2 class="h3 mb-0 text-gray-800">Panneau d'administration</h2>
                        
                    </div>

                    <!-- Row 1 -->
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
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
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
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
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Nombre de questions en BDD</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $questions ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2xl"></i>
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
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
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

                    <!-- Action Container -->
                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-9 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Actions</h6>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="chart-area d-flex flex-column">
                                        <div class="w-25">
                                            <form action="?controller=admin&action=nbr_questions" method="POST">
                                                <label for="nbr_questions" class="form-label">Nb de questions par quiz</label>
                                                <div class="d-flex">
                                                    <input type="text" class="form-control me-3" id="nbr_questions" name="nbr_questions">
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

                    


                    

                

    
   

  
