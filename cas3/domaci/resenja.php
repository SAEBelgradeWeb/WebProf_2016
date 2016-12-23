<?php

//Excersize 1.

/*

Create a script to construct the following pattern, using nested for loop:

 * 
 * *
 * * *
 * * * *
 * * * * *


 */
//Solution:

for ($x = 1; $x <= 5; $x++) {
    print_r($x);
    exit();
    for ($y = 1; $y <= $x; $y++) {
        print_r($y);
        exit();
        echo "*";
        if ($y < $x) {
            echo " ";
        }
    }
    echo "\n";
    exit();
}


//Excersize 2.

/*

Create a script to construct the following pattern, using a nested for loop

* 
* * 
* * * 
* * * * 
* * * * * 
* * * * * 
* * * * 
* * * 
* * 
*


*/

//Solution: 

$n = 5;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo ' * ';
    }
    echo "\n";
}
for ($i = $n; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo ' * ';
    }
    echo "\n";
}


//Excersize 3.

/*

Write a program which will count the "r" characters in the given string var. Start with 
"SAE University, Belgrade, Serbia"

*/

//Solution:

$text = "SAE University, Belgrade, Serbia";
$search_char = "r";
$count = "0";
for ($x = "0"; $x < strlen($text); $x++) {
    if (substr($text, $x, 1) == $search_char) {
        $count = $count + 1;
    }
}
echo $count . "\n";

//Excersize 4.

/*

Write a PHP program which iterates the integers from 1 to 50. For multiples of three print "Fizz" instead of the number and for the multiples of five print "Buzz". For numbers which are multiples of both three and five print "FizzBuzz".

*/

//Solution:
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo $i . " FizzBuzz" . "\n";
    } else if ($i % 3 == 0) {
        echo $i . " Fizz" . "\n";
    } else if ($i % 5 == 0) {
        echo $i . " Buzz" . "\n";
    } else {
        echo $i . "\n";
    }
}