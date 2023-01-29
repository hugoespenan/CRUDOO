<?php

class connexion
{
    private $tableemail;
    private $tablemdp;
    private $email;
    private $mdp;
    private $table;
    private $enregistementemail;
    private $enregistementmdp;
    private $enregistementnom;
    private $enregistementprenom;
    private $enregistementadresse;
    private $enregistementddn;



    public function __construct($mdp, $email, $table, $tableemail, $tablemdp){
        $this->tablemdp=$tablemdp;
        $this->table=$table;
        $this->tableemail=$tableemail;
        $this->mdp=$mdp;
        $this->email=$email;
    }

    /**
     * @return mixed
     */
    public function getTableemail()
    {
        return $this->tableemail;
    }

    /**
     * @return mixed
     */
    public function getTablemdp()
    {
        return $this->tablemdp;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @return mixed
     */
    public function getTable()
    {
        return $this->table;
    }
    public function co(){
        return "SELECT * FROM ".$this->table." WHERE ".$this->tableemail." = :email and ".$this->tablemdp." = :mdp";
    }
    public function enregistrement($enregistementemail, $enregistementmdp, $enregistementnom, $enregistementprenom, $enregistementadresse, $enregistementddn){
        $this->enregistementmdp = $enregistementmdp;
        $this->enregistementnom = $enregistementnom;
        $this->enregistementprenom = $enregistementprenom;
        $this->enregistementadresse = $enregistementadresse;
        $this->enregistementddn = $enregistementddn;
        $this->enregistementemail = $enregistementemail;

        session_start();
        $_SESSION['email'] = $this->enregistementemail;
        $_SESSION['mdp'] = $this->enregistementmdp;
        $_SESSION['nom'] = $this->enregistementnom;
        $_SESSION['prenom'] = $this->enregistementprenom;
        $_SESSION['adresse'] = $this->enregistementadresse;
        $_SESSION['ddn'] = $this->enregistementddn;
    }
    


}