<?php 

if (empty($_GET['page'])){
    require "views/accueil.view.php";
} else {
    switch ($_GET['page']){
        case 'accueil':
            require "views/accueil.view.php";
            break;
        case 'livres':
            require "views/livres.view.php";
            break;
        case 'a-propos':
            require "views/a-propos.view.php";
            break;
        case 'contact':
            require "views/contact.view.php";
            break;
    }
}







 