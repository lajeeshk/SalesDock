<?php

namespace App\Services\RuleDefinitions;

use App\Services\RuleDefinition;

class ruleFiberAndStatcIp extends RuleDefinition
{
    protected $isActive = false;

    public $ruleList = array(
        'fiberandstaticIp' => array(
            array('technology', '=', 'fiber'),
            array('static_ip','=','1')
        )

    );

}
