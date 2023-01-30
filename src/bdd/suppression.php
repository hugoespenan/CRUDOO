<?php
require_once 'bdd.php';
$base = new bdd("atm", "localhost", "", "root");
class suppression
{
    private $tabledesuppression;
    private $conditiontable;
    public function __construct($conditiontable, $tabledesuppression){
        $this->conditiontable = $conditiontable;
        $this->tabledesuppression = $tabledesuppression;
    }

    /**
     * @param mixed $tabledesuppression
     */
    public function setTabledesuppression($tabledesuppression)
    {
        $this->tabledesuppression = $tabledesuppression;
    }

    /**
     * @param mixed $conditiontable
     */
    public function setConditiontable($conditiontable)
    {
        $this->conditiontable = $conditiontable;
    }

    public function supprimer(){
        return "DELETE FROM ".$this->tabledesuppression." WHERE ".$this->conditiontable." = :condition";
    }



}