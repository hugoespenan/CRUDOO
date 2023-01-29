<?php

class suppression
{
    private $tabledesuppression;
    private $conditiontable;
    private $condition;
    private $post;

    public function supprimer( $conditiontable, $tabledesuppression, $post){
        $this->post=$post;
        $this->tabledesuppression=$tabledesuppression;
        $this->conditiontable=$conditiontable;
        $this->a = "DELETE FROM ".$this->tabledesuppression." WHERE ".$this->conditiontable." = :condition";
        $this->a->execute(array('condition' => $this->condition));
    }
    public function setCondition($condition){
        $this->condition=$condition;
    }


}