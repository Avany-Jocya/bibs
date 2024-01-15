<?php

class LivreManager{

    private array $livres;
    
    public function ajouterLivre($nouveauLivre){
        $this->livres[] = $nouveauLivre;
    }

    
    public function getLivres(): array {
        return $this->livres;
    }
}
?>