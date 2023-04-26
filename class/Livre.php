<?php 

class Livre
{
    private $_titre;
    private $_date;
    private $_nbpages;
    private $_prix;
    private Auteur $_auteur;

    public function __construct($titre, $date, $nbpages, $prix, Auteur $auteur)
    {
        $this->_titre = $titre;
        $this->_date = $date;
        $this->_nbpages= $nbpages;
        $this->_prix = $prix;
        $auteur->addLivres($this);
    }

    public function setTitre($titre)
    {
        $this->_titre = $titre;
    }

    public function setDate($date)
    {
        $this->_date = $date;
    }

    public function setNbpages($nbpages)
    {
        $this->_nbpages = $nbpages;
    }

    public function setPrix($prix)
    {
        $this->_prix = $prix;
    }

    public function getTitre()
    {
        return $this->_titre;
    }

    public function getDate()
    {
        return $this->_date;
    }

    public function getNbpages()
    {
        return $this->_nbpages;
    }

    public function getPrix()
    {
        return $this->_prix;
    }

    public function __toString()
    {
        return $this->getTitre() . " (" . $this->getDate() . ") : " . $this->getNbpages() . " pages / " . $this->getPrix() . " €<br>";
    }
}