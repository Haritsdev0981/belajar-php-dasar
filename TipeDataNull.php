<?php

$name = "Magnus Carlsen";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

//Untuk mengecek apakah sebuah data variable bernilai null atau tidak gunakan is_null(nama variablenya);
echo "Is Name Null? : ";
echo is_null($name);
echo "\n";
 
$name = "Harits";

echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";

//Untuk mengecek apakah sebuah data variable bernilai null atau tidak gunakan isset(nama variablenya);
var_dump(isset($name));

//menghapus variable menggunakan unset();
$contoh = "Ini Percobaan Unset";
unset($contoh);

echo $contoh;