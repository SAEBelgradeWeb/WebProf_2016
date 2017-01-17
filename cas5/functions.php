<?php
function konvertuj_jedinice_duzine($length, $inputUnit, $outUnit) {
    $matrix = [
        'km' => [
            'mi' => 0.621371,
            'nm' => 0.539957
        ],
        'mi' => [
            'km' => 1.60934,
            'nm' => 0.868976
        ],
        'nm' => [
            'km' => 1.852,
            'mi' => 1.15078
        ],
    ];

    if (!isset($matrix[$inputUnit][$outUnit])) die('Greska, ta jedinica ne postoji');

    return $result = $length * $matrix[$inputUnit][$outUnit];
    //inputLength = km, $outLength = min
//    if ($inputUnit == "km" && $outUnit == "mi") {
//        $result = $length * 0.621371;
//    } else if ($inputUnit == "km" && $outUnit == "nm") {
//        $result = $length * 0.539957;
//    } else if ($inputUnit == "mi" && $outUnit == "km") {
//        $result = $length * 1.60934;
//    } else if ($inputUnit == "mi" && $outUnit == "nm") {
//        $result = $length * 0.868976;
//    } else if ($inputUnit == "nm" && $outUnit == "km") {
//        $result = $length * 1.852;
//    } else if ($inputUnit == "nm" && $outUnit == "mi") {
//        $result = $length * 1.15078;
//    } else {
//        die("To je greska neka, ubila si pogresnog coveka!");
//    }
}

function write_length($length, $inputUnit, $outUnit, $placeFromHere) {
    $outLength = konvertuj_jedinice_duzine($length, $inputUnit, $outUnit);
    echo "From here to " . $placeFromHere . " in ". $outUnit . " is " . $outLength;
 }


 write_length("80", "km", "mi", "Novi Sad");