<?php
/**
 * Created by PhpStorm.
 * User: pedja
 * Date: 12/22/16
 * Time: 17:13
 */

$total = 0;
$string = '';

$myA = [ -24, 'some', 'item', 1, 'Could',
    776, 33, -50, "BE", 'awesome', 5.7,'.'];

function conc($itemString){
    global $string;
    return $string .= $itemString.' ';
}

function sum($itemNum){
    global $total;
    return $total + $itemNum;
}

foreach( $myA as $item){
    if (is_string($item)){
        conc($item);
    }else{
        $total = sum($item);
    }
}

echo ucfirst(strtolower($string)).'<br>';
echo $total;