<?php

class inscrire
{
    private $nom;
    private $prenom;
    private $login;
    private $mdp;
    private $adresse;
    private $ddn;
    private $table;




    public function __construct($nom,$ddn,$prenom,$adresse,$login,$mdp, $table)
    {
        $this->login=$login;
        $this->ddn=$ddn;
        $this->adresse=$adresse;
        $this->prenom=$prenom;
        $this->nom=$nom;
        $this->mdp=$mdp;
        $this->table=$table;
    }

    public function inscription(){
        return "INSERT INTO ".$this->table." (".$this->nom.", ".$this->prenom.", ".$this->login.", ".$this->mdp.", ".$this->adresse.", ".$this->ddn.") VALUES (:nom, :prenom, :login, :mdp, :adresse, :ddn) ";
    }

}