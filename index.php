<?php
require_once 'classes/ArrayLib.php';
$array_lib=new ArrayLib(['ahmad','ali','wael','fhd']);

//$array_lib->generate(5,true);
$new_array=$array_lib->getArray();
$code=$array_lib->toString();
echo $code;
echo "<br>";
echo $array_lib->getLength();
echo "<br>";
$array_lib->remove(6);
echo $array_lib->getLength();
echo "<br> Code:";
$code=$array_lib->toString();
echo $code;
$array_lib->edit(2,'Ahmad');
echo "<br> Edit";
$code=$array_lib->toString();
echo $code;
echo "<br> ToArray";
$array_lib->toArray('ahmad');
print_r($array_lib->getArray());
/// Static
$data=ArrayLib::generate(7,true);
print_r($data);