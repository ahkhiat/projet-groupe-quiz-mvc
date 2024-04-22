<?php
session_start();

require_once('../Models/Game.php');
require_once('../Models/Config.php');


$m = Game::get_model();
$mc = Config::get_model();

$nbr_questions = $mc->get_nbr_questions();

$data = $m->get_fetch_questions($nbr_questions);

$jsonData = json_encode($data);

if ($jsonData === false) {
    http_response_code(500); // Erreur interne du serveur
    exit;
}

ob_clean();
header('Content-Type: application/json');

echo $jsonData;
exit;