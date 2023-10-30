<?php

require_once 'vendor/autoload.php';


use \CowSay\Core\Calf;
use CowSay\Cow;
use CowSay\CrazyCow;



$vache = new CrazyCow('Bonjour je suis une vache ! ');

echo $vache;
$vache->getTongue();




