<div id="questions_container">

<?php
include('./Utils/header_admin.php')
?>

    <div>

        <div class="align-self-end">
            <a href="?controller=question&action=question_add"><button class="mt-3 btn btn-secondary">Ajouter une question</button></a>
        </div>

        <table id='table' class="table">
            <thead>
                <th>id</th>
                <th>theme</th>
                <th>content</th>
                <th>level</th>
                <th>Réponse 1</th>
                <th>Réponse 2</th>
                <th>Réponse 3</th>
                <th>Réponse 4</th>
                <th>Action</th>
            
            </thead>
            <?php  foreach($questions as $q ): ?>
            <tr>
                <td><?=$q->question_id?></td>
                <td><?=$q->theme_name?></td>
                <td><?=$q->question_content?></td>
                <td><?=$q->question_level?></td>
                    <?php foreach($answers as $a): ?>
                        <?php if($a->question_id === $q->question_id): ?>
                        <td><?=$a->answer_content?></td>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <td>
                    <div class="d-flex flex-row">
                        <form action="?controller=question&action=question_update" method="POST">
                            <input type="hidden" name="question_id" class="form-control" id="hide" value=<?= $q->question_id ?> >
                            <button type="submit" class="btn btn-primary btn-sm me-3"><i class="fa-regular fa-pen-to-square"></i></button>
                        </form>
                        <form action="?controller=question&action=question_delete" method="POST" id="question_delete_form">
                            <input type="hidden" name="question_id" class="form-control" id="hide" value=<?= $q->question_id  ?> >
                            <button type="submit" class="btn btn-danger btn-sm delete-button" onclick="return confirmation()"><i class="fa-regular fa-trash-can"></i></button>
                        </form>
                    </div>
                </td>
                
            </tr>
            
            <?php endforeach; ?>
            
        </table>
    </div>  


</div>
