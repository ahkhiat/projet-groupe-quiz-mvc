<div class="container">
    <div class="title">
        <h2>Choisissez la difficulté</h2>
    </div>
    <form action="?controller=game&action=start_game" method="POST">
        <div class="buttons-container container-fluid">
                <button type="submit" class="pushable col-9 col-sm-9 col-md-6 col-xl-6" name="level" value="1">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <span class="front">Débutant</span>
                </button>

                <button type="submit" class="pushable col-9 col-sm-9 col-md-6 col-xl-6" name="level" value="2">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <span class="front">Intermédiaire</span>
                </button>

                <button type="submit" class="pushable col-9 col-sm-9 col-md-6 col-xl-6" name="level" value="3">
                    <span class="shadow"></span>
                    <span class="edge"></span>
                    <span class="front">Avancé</span>
                </button>
        </div>        
    </form>
</div>
