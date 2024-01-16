<?php 

if (empty($_GET['page'])){
    require "view/accueil.view.php";
} else {
    switch ($_GET['page']){
        case 'accueil':
            require "views/accueil.view.php";
            break;
    }
}







 