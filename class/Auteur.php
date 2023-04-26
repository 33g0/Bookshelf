<?php 

class Auteur
{
    private string $_nom;
    private string $_prenom;
    private array $_livres;
    private string $_dateNaissance;

    public function __construct ($nom, $prenom, $dateNaissance)
    {
        $this->_livres = [];
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = $dateNaissance;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function setDateDeNaissance($dateNaissance)
    {
        $this->_dateNaissance = $dateNaissance;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function getAge()
    {
        $date = new DateTime($this->_dateNaissance);
        $today = new DateTime();
        $diff = $date->diff($today)->format("%y");
        return $diff;
    }

    public function addLivres(Livre $livre)
    {
        $this->_livres[] = $livre;
    }

    public function afficherBibliographie()
    {
        echo "<strong>Livres de ".$this->getNom()." ". $this->getPrenom()." ".$this->getAge()." ans</strong><br>";
        foreach ($this->_livres as $livre)
        {
            echo $livre;
        }
    }

    public function __toString()
    {
        return "<strong>Auteur: " . $this->getNom() . " " . $this->getPrenom() ." ans</strong><br>";
    }
}