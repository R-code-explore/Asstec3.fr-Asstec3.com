<?php

// Afficher les résultats dans un tableau HTML
echo '<table>';
echo '<tr><th>Agent</th><th>Date</th></tr>';
echo file_get_contents($file);
echo '</table>';

?>
