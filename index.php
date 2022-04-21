<?php
include 'MyArray.php';
$arr = new MyArray(10);
print_r($arr->getArr());
print_r(PHP_EOL);
print_r($arr->minArray());
print_r(PHP_EOL);
print_r($arr->maxArray());
print_r(PHP_EOL);
print_r($arr->dividedByFourArr());
print_r(PHP_EOL);
print_r($arr->evenArr());
print_r(PHP_EOL);
print_r($arr->oddArr());
print_r(PHP_EOL);
print_r($arr->sumMaxMinElements());