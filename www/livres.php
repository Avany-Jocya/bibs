<?php

// require "ConnexionManager.class.php";
// $connexionManager = new ConnexionManager;
// $connexionManager->setConnexionBdd();

require_once "Livre.class.php";
// $livre1 =new Livre(1,"Heartbreak","livre4.jpg", 20);
// $livre2 =new Livre(2,"When i look at you","livre5.jpg", 13);
// $livre3 =new Livre(3,"Fusionnelle","livre6.jpg", 14);
// $livre4 =new Livre(4,"La casa de Partouz","livre1.jpg", 20);
// $livre5 =new Livre(5,"Red Hair magik","livre2.jpg", 20);

// $livres = [$livre1, $livre2, $livre3];

require_once "LivreManager.class.php";
$livreManager = new LivreManager;
$livreManager->chargementLivres();
// $livreManager->ajouterLivre($livre1);
// $livreManager->ajouterLivre($livre2);
// $livreManager->ajouterLivre($livre3);
// $livreManager->ajouterLivre($livre4);
// $livreManager->ajouterLivre($livre5)


?>


<?php ob_start() ?>
<table class="table table-center">
    <tr class="table-dark">
        <th>Image</th>
        <th>Titre</th>
        <th>Nombre de pages</th>
        <th colspan="2">Actions</th>
    </tr>
<?php 
$livresEnCours = $livreManager->getLivres();

foreach($livresEnCours as $livre) : ?>
    <tr>
        <td class="align-middle"><a href="https://www.wattpad.com/user/Asile-Avany"><img src="public/images/<?php echo $livre->getImage();?>" height="150px" alt="Livre pour <?php echo $livre->getTitre();?>" ></a></td>
        <td class="align-middle"><?php echo $livre->getTitre();?></td>
        <td class="align-middle"><?php echo $livre->getNbDePages();?></td>
        <td class="align-middle"><a href="#" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle"><a href="#" class="btn btn-danger">Supprimer</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="#" class="btn btn-success d-block">Ajouter un livre</a>
<?php
$titre = "Bibliothèque d'Avany";
$content = ob_get_clean();
require_once "template.php";