<?php
namespace App\Services;

abstract class RuleDefinition {
    
    protected $ruleList;
    protected $isActive = true;

    public function getDefinition() : array {
        return $this->ruleList;
    }

    public function isActive(){
        return $this->isActive;
    }

}