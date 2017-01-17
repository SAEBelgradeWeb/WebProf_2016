<?php

//echo time();
//echo mktime(12, 00, 00, 1, 17, 2017);
$now = time();
$podne = mktime(12, 00, 00, 1, 17, 2017);
$cista_razlika = $now - $podne;

$razlika_sati = $cista_razlika / 60 / 60;
$sati = floor($razlika_sati);

$razlika_min = $cista_razlika - ($sati * 60 * 60);
$minuta = floor($razlika_min / 60);

$sekundi = $cista_razlika - ($sati * 60 * 60) - ($minuta * 60);
$sutra = strtotime("tomorrow");
//echo $sati . ":" . $minuta . ":" . $sekundi;
//echo ($sutra - $now) / 60 / 60;
$rodjendan = strtotime("12 April 2017 Friday +1 week");

//echo date("d. m. Y", $rodjendan);
//echo $now - $rodjendan;

//for ($i = 0; $i < 17; $i++) {
//    $ts = strtotime("1 January 2017 +$i week Tuesday");
//    echo date("d. m. Y l", $ts);
//    echo "<br>";
//    $ts = strtotime("1 January 2017 +$i week Thursday");
//    echo date("d. m. Y l", $ts);
//    echo "<br>";
//}

var_dump(getdate($now));