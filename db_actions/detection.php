<?php
$file = './db_actions/agent_detection.php';

if (isset($_SERVER['HTTP_USER_AGENT'])) {
    $agent = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set('Europe/Paris');
    $date = date('Y-m-d H:i:s');

    $data = "<tr><td>$agent</td><td>$date</td></tr>\n";

    // Ajouter les informations de l'utilisateur dans le fichier "agent_detection.php"
    file_put_contents($file, $data, FILE_APPEND);
}
?>
