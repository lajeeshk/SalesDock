<?php

namespace App\Services\RuleDefinitions;

use App\Services\RuleDefinition;

class ruleUploadSpeedGreaterThan100 extends RuleDefinition
{
    public $ruleList = array(
        'UploadSpeedGreaterThan100' => array(
            array('upload_speed', '>', '100')
        )

    );

}
