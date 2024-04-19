<div id="themes_container">

    <?php
    include('./Utils/header_admin.php');

    // var_dump($nbr_questions_themes);
    ?>

    <div>
        <div class="align-self-end">
            <a href="?controller=theme&action=theme_add"><button class="mt-3 btn btn-secondary">Ajouter un thème</button></a>
        </div>

        <table id='table' class="table">
            <thead>
                <th>id</th>
                <th>Theme</th>
                <th>Nb questions</th>
                <th>Action</th>

            </thead>
            <?php foreach ($nbr_questions_themes as $t) : ?>
                <tr>
                    <td><?= $t->theme_id ?></td>
                    <td><?= $t->theme_name ?></td>
                    <td><?= $t->Total_questions ?></td>
                    <td>
                        <div class="d-flex flex-row">
                            <form action="?controller=theme&action=theme_update" method="POST">
                                <input type="hidden" name="theme_id" class="form-control" id="hide1" value=<?= $t->theme_id ?> >
                                <button type="submit" class="btn btn-primary btn-sm me-3"><i class="fa-regular fa-pen-to-square"></i></button>
                            </form>
                            <form action="?controller=theme&action=theme_delete" method="POST" id="theme_delete_form">
                                <input type="hidden" name="theme_id" class="form-control" id="hide2" value=<?= $t->theme_id  ?> >
                                <button type="submit" class="btn btn-danger btn-sm delete-button"><i class="fa-regular fa-trash-can"></i></button>
                            </form>
                        </div>
                    </td>

                   

                </tr>

            <?php endforeach; ?>
        </table>
    </div>

</div>