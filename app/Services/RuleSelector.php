<?php
namespace App\Services;

class RuleSelector {

    const ruleDefinitionPath = 'Services/RuleDefinitions';
    const ruleDefinitionNamespace = 'App\Services\RuleDefinitions\\';

    public static function getAllFromFile() :array {
        
        $rules = array();
        $path = app_path().DIRECTORY_SEPARATOR.self::ruleDefinitionPath;
        $files = scandir($path);
      
        foreach($files as $file){
            if(preg_match("/(.*)\.php$/", $file, $matches)) {
                $ruleClassName = self::ruleDefinitionNamespace.$matches[1];
                $ruleObject = new $ruleClassName();
                if($ruleObject->isActive()){
                    $rules[] = $ruleObject->getDefinition();
                }
            }
            
        }
        return $rules;
    }

}