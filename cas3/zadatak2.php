<?php
/*
 * boolean u sredini prdstavlja completed ili ne
 */
$taskovi = [
    1 => [
        'task' => 'Otici u kupovinu',
        'comleted' => true,
        'datum' => '06. 12. 2016.'],
    2 => ['task' => 'Kupiti jelku', 'completed' => false, 'datum' => '21. 12. 2016.'],
    3 => ['task' => 'Zapaliti vatru', 'completed' => true, 'datum' => '23. 12. 2016.'],
    4 => ['task' => 'Zaklati pile', 'completed' => false, 'datum' => '17. 12. 2016.'],
    5 => ['task' => 'Popiti pivo', 'completed' => true, 'datum' => '09. 12. 2016.'],
    6 => ['task' => 'Odspavati dobro', 'completed' => false, 'datum' => '31. 12. 2016.'],

];
include ('zadatak2.view.php');
//if ($a == $b) {
//    $pitanje = 'odgovor1';
//} else {
//    $pitanje = 'odgovor2';
//}
//
//$pitanje = ($a == $b) ? "odgovor1" : "odgovor2";
