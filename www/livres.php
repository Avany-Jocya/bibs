<?php ob_start() ?>

<table class="table table-center">
    <tr class="table-dark">
        <th>Image</th>
        <th>Titre</th>
        <th>Nombre de pages</th>
        <th colspan="2">Actions</th>
    </tr>

    <tr>
        <td class="align-middle"><img src="public/images/livre1.jpg" height="150px" alt="Livre Casa de Partouz" ></td>
        <td class="align-middle">La casa des partouz</td>
        <td class="align-middle">14</td>
        <td class="align-middle"><a href="#" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle"><a href="#" class="btn btn-danger">Supprimer</a></td>
    </tr>
    <tr>
         <td class="align-middle"><img src="public/images/livre2.jpg" height="150px" alt="Livre Red hair magick" ></td>
        <td class="align-middle">Red hair Magik</td>
        <td class="align-middle">20</td>
        <td class="align-middle"><a href="#" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle"><a href="#" class="btn btn-danger">Supprimer</a></td>
    </tr>
    <tr>
         <td class="align-middle"><img src="public/images/livre3.jpg" height="150px" alt="Livre Recueil DWWM" ></td>
        <td class="align-middle">Recueil DWWM</td>
        <td class="align-middle">4</td>
        <td class="align-middle"><a href="#" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle"><a href="#" class="btn btn-danger">Supprimer</a></td>
    </tr>
</table>

<a href="#" class="btn btn-success d-block">Ajouter un livre</a>
<?php
$titre = "Bibliothèque d'Avany";
$content = ob_get_clean();
require_once "template.php";