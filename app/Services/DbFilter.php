<?php
namespace App\Services;
use Illuminate\Support\Facades\DB;

class DbFilter {

    public function __construct($tableName){
        $this->table = DB::table($tableName);
    }

    public function buildQueryFromRule(){
        $ruleDefinitions = RuleSelector::getAllFromFile();

        foreach($ruleDefinitions as $definition){
            foreach($definition as $ruleList){
                foreach($ruleList as $rule)

             $this->table->where($rule[0],$rule[1],$rule[2]);
            }
        }

        $sql    = $this->table->toSql();
        $result = $this->table->get();
        return $result;
    }
}