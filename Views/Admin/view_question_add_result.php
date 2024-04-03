<div class="w-25 mx-auto mt-5">
<h4>La question a été ajoutée sous l'id <strong><?= $question_id ?></strong> ! </h4>
</div>

<script>setTimeout(() => {
window.location.href = '?controller=admin&action=all_questions';

}, 3000);</script>