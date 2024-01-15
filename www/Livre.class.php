<?php
class livre
{
    private int $id;
    private string $titre;
    private string $image;
    private int $nbDePages;
    // public static array $livres; //tableau de livres

    public function __construct(int $id, string $titre,string $image, int $nbDePages)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->image = $image;
        $this->nbDePages = $nbDePages;
        // self::$livres[]=$this;
    }
    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id): self {
        $this->id = $id;
        return $this;
    }
    public function getTitre(): string {
        return $this->titre;
    }
    public function setTitre(string $titre): self {
        $this->titre = $titre;
        return $this;
    }
    public function getImage(): string {
        return $this->image;
    }
    public function setImage(string $image): self {
        $this->image = $image;
        return $this;
    }
    public function getNbDePages(): int {
        return $this->nbDePages;
    }
    public function setNbDePages(int $nbDePages): self {
        $this->nbDePages = $nbDePages;
        return $this;
    }
}