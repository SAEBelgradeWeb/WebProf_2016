<?php


$someArray = ["one", 'dva', 3];

echo "<pre>";
print_r($someArray);


///create sae school array
// sae has 3 classes 
// each class has javascript, php and html element

//sae
//		->[
//			'html', javascript, php
//		  ]
//		->[
//			'html', javascript, php
//		  ]
//		->[
//			'html', javascript, php
//		  ]

$sae = [
	[
	'html'=>26, 
	'javascript'=>27, 
	'php'=>27
	], 
	['html'=>12, 
	'javascript'=>15, 
	'php'=>34
	], 
	['html'=>3, 
	'javascript'=>7, 
	'php'=>7] 
];
echo $sae[2]['php'];






