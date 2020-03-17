<?php

namespace App\Services\RuleDefinitions;

use App\Services\RuleDefinition;

class ruleUploadSpeedGreaterThan100AndFiber extends RuleDefinition
{
    public $ruleList = array(
        'UploadSpeedGreaterThan100' => array(
            array('upload_speed', '>', '100')
        ),
        'fiber' => array(
            array('technology', '=', 'fiber')
        )

    );

}
