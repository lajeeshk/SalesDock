<?php
namespace App\Services;

abstract class RuleDefinition {
    
    protected $ruleList;

    public function getDefinition() : array {
        return $this->ruleList;
    }

}