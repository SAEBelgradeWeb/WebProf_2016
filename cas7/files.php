<?php

$result = file_exists('nesto.txt');

$result = is_file('nesto.txt');

$result = is_dir('/Users/vladimirlelicanin/Sites/vagrant/web-prof/cas7');
$result = is_writable("nesto.txt");
$result = dirname('nesto.txt');
$result = basename('/Users/vladimirlelicanin/Sites/vagrant/web-prof/');
$result = filesize('nesto.txt');

$dir  = scandir('.');
echo "<ul>";
foreach ($dir as $item)
{
    if($item != "." && $item != ".." && is_dir($item)) {
     //   echo "<li>" . $item . "</li>";
    }

}

echo "</ul>";
/*
//$podaci = ['name' => "John Smith", 'email'=> 'ajd@sdlka.com'];
//
//$fajl = fopen('nesto.txt', 'w');
//fwrite($fajl, serialize($podaci));
$fajl = fopen('nesto.txt', 'r');
//$result= fwrite($fajl, "Vlada");
$sadrzaj = unserialize(fread($fajl, filesize('nesto.txt')));

var_dump($sadrzaj);
fclose($fajl);
*/

//$fajl = file_get_contents("nesto.txt");
//var_dump($fajl);
$ima_vec = file_get_contents('nesto2.txt');

file_put_contents("nesto2.txt",  "Obama is .." . $ima_vec);

//copy("nesto.txt", 'test/nesto_novi.txt');

//rename('test/svasta.txt', 'nesto.txt');

//unlink("nesto3.txt");

mkdir('ostalo', 0777);
