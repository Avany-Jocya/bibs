<?php
require_once "ConnexionManager.class.php";

class LivreManager extends ConnexionManager {

    private array $livres;
    
    public function ajouterLivre($nouveauLivre){
        $this->livres[] = $nouveauLivre;
    }

    public function chargementLivres(){
        $connexion = $this->getConnexionBdd();
        $req = $connexion->prepare("SELECT * FROM livre");
        $req->execute();
        $livresImportes = $req->fetchALL(PDO::FETCH_ASSOC);
        $req->closeCursor();

        foreach($livresImportes as $livre){
            $nouveauLivre = new Livre($livre['id_livre'], $livre['titre'],$livre['image'],$livre['nb_pages']);
            $this->ajouterLivre($nouveauLivre);

        }
    }


    public function getLivres(): array {
        return $this->livres;
    }
}
?>