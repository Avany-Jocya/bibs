<?php ob_start() ?>
<h1> A Propos</h1>

<?php
$titre = "Bibliothèque d'Avany";
$content = ob_get_clean();
require_once "template.view.php";