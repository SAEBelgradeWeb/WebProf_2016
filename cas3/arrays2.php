<?php
/*
 * implode, explode, in_array, array_map, array_filter
 * array_push, array_pop, array_shift, array_unshift, array_splice
 */


$automobili = ['mazda', 'honda', 'toyota', 'ford', 'mercedes', 'lexus'];
$string_automobili = "mazda, honda, toyota";
//mazda, honda, toyota

$automobili_string = implode(" | ", $automobili);
$novi_ar = explode(", ", $string_automobili);

$user = [
    'name' => 'John',
    'lastname' => 'Smith'
];

$novi_array = array_map(function ($el)
{
    if ($el == "mazda")
    {
        return $el . "bla";
    } else {
        return $el;
    }
}, $automobili);


$novi_array = array_filter($automobili, function ($el)
{
    if ($el) return true;

    return false;
});


$novi_array = array_filter($automobili, function ($el)
{
    if (strlen($el) == 5) return true;

    return false;
});

var_dump($novi_array);