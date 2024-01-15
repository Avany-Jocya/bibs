<?php ob_start() ?>

<h1>Les Livres</h1>

<?php
$titre = "Bibliothèque d'Avany";
$content = ob_get_clean();
require_once "template.php";