<?php
/**
 * Created by PhpStorm.
 * User: pedja
 * Date: 12/22/16
 * Time: 17:15
 */

$person = [];

function nameThatGuy($first, $last){
    $thatGuy = [];
    $thatGuy['firstName'] = ucfirst(strtolower($first));
    $thatGuy['lastName'] = ucfirst(strtolower($last));
    return $thatGuy;
}
function combineName($thatGuy){
    return $thatGuy['firstName'].' '.$thatGuy['lastName'];
}

$person = nameThatGuy('Dzole', 'Prolece');
$person['displayName'] = combineName($person);

echo "Person name = ".$person['displayName'];