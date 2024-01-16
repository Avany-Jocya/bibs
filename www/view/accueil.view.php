<?php ob_start() ?>

<h1> Ma page d'accueil</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum expedita, tenetur libero ipsam repudiandae voluptates a necessitatibus ab optio vero facere animi atque magni et? Mollitia sit nemo beatae hic?</p>

<?php

//buffer restitué
$titre = "Bibliothèque d'Avany";
$content = ob_get_clean();
require_once "template.php"

?> 