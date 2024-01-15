<?php
class Livre {
  
    private array $image;
    private string $titre;
    private int $nbPages;

    public function __construct(array $image, string $titre, int $nbPages)
    {
        $this->image = $image;
        $this->titre = $titre;
        $this->nbPages = $nbPages;
      
    }
    public function __toString() {
        $msg = "image : " . $this->image . ".</br>
              Titre : " . $this->titre . ".</br>
              Nombre de pages : " . $this->nbPages . ".</br>";
        
       
    }

    public function getimage(){
        return $this->image;
    }
    public function setimage($newimage){
        $this->image = $newimage;
    }
    public function getTitre(){
        return $this->titre;
    }
    public function setTitre($newTitre){
        $this->titre = $newTitre;
    }

    public function getNbPages(){
        return $this->nbPages;
    }
    public function setNbPages($newNbPage){
        $this->nbPages = $newNbPage;
    }

}
?>