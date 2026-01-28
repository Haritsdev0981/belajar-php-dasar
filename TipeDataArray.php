<?php

$values = array(10, 9, 8, 7, 6.5);
var_dump($values);

$nama = ["Wardhani", "Robby", "Furqon"];
var_dump($nama);

//Operasi Array
var_dump($nama[0]);
$nama[0] = "Pak Wardhani";
var_dump($nama);
unset($nama[1]);
var_dump($nama);
$nama[] = "Agus";
var_dump(count($nama));