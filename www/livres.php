<?php
require_once "Livre.class.php";
$livre1 =new livre(1,"Heartbreak","livre4.jpg", 20);
$livre2 =new livre(2,"When i look at you","livre5.jpg", 13);
$livre3 =new livre(3,"Fusionnelle","livre6.jpg", 14);

$livres = [$livre1, $livre2, $livre3];

?>


<?php ob_start() ?>
<table class="table table-center">
    <tr class="table-dark">
        <th>Image</th>
        <th>Titre</th>
        <th>Nombre de pages</th>
        <th colspan="2">Actions</th>
    </tr>
<?php foreach($livres as $livre) : ?>
    <tr>
        <td class="align-middle"><img src="public/images/<?php echo $livre->getImage();?>" height="150px" alt="Livre Casa de Partouz" ></td>
        <td class="align-middle">La casa des partouz</td>
        <td class="align-middle">14</td>
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