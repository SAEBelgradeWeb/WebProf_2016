<?php 

// $isLightOn = false;

// function turnOn(){
// 	echo "Turning light on...";
// 	$isLightOn = true;
// }

// if($isLightOn == false){
// 	turnOn();
// }

$testVar = 1;

// if testVar > 7 
// echo number is too large
//if testVar < 2 
// echo number is too small
//if testVar is 7 
// echo number is perfect
$testVar = 7;

	if($testVar > 7 && is_int($testVar)){
		echo "Number is too large";
	}elseif($testVar < 2){
		echo "Number is too small";
	}elseif($testVar === 7){
		echo "Number is perfect";
	}









