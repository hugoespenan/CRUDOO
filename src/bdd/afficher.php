<?php

class afficher
{
    private $nom;
    private $prenom;
    private $login;
    private $adresse;
    private $ddn;

    /**
     * @return mixed
     */
    public function getNom()
    {
        echo $this->nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        echo $this->prenom;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        echo $this->login;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        echo $this->adresse;
    }

    /**
     * @return mixed
     */
    public function getDdn()
    {
        echo $this->ddn;
    }



    public function __construct($tabl)
    {
        $this->hydrate($tabl);
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @param mixed $ddn
     */
    public function setDdn($ddn)
    {
        $this->ddn = $ddn;
    }



public function hydrate(array$donnees){
        foreach($donnees as $key => $item){

            $method='set'.($key);

        if(method_exists($this,$method)){
            $this->$method($item);

    }
    }

    }
public function afficher(){
        echo "Le nom est : ".$this->nom." le prenom est : ".$this->prenom." le login est ".$this->login." l'adresse est : ".$this->adresse." la date de naissance est : ".$this->ddn;
}
}