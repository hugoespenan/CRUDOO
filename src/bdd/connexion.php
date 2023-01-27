<?php

class connexion
{
    private $tableemail;
    private $tablemdp;
    private $email;
    private $mdp;
    private $table;

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
    


}