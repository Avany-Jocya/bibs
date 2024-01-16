<?php ob_start() ?>

<div class="contact">
           
            <p class="info">AGON Jocya</p>
       
            <p class="info"><img src="/image/adresse.gif" alt="">6 Allée des Rosati Appt 13- 62000 Arras</p>

            <p class="info"><img src="/image/icons8-sonnerie-phonelink-64.png" alt="">07 68 59 66 69</p>

            <p><img src="/image/mail.gif" alt=""><a href="mailto:agonjocya@gmail.com">agonjocya@gmail.com</a></p>
        
            <p class="info"><img src="/image/permis.gif" alt="">Permis :B</p>
        </div>
        <?php
$titre = "Bibliothèque d'Avany";
$content = ob_get_clean();
require_once "template.view.php";