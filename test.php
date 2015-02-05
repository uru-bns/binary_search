<?php

require_once('./binary_search.php');

$data = [1, 2, 3, 10, 20, 30, 100, 200, 300];
$right = count($data) - 1;

var_dump(binary_search($data, 1, 0, $right) == 0);
var_dump(binary_search($data, 2, 0, $right) == 1);
var_dump(binary_search($data, 3, 0, $right) == 2);
var_dump(binary_search($data, 10, 0, $right) == 3);
var_dump(binary_search($data, 20, 0, $right) == 4);
var_dump(binary_search($data, 30, 0, $right) == 5);
var_dump(binary_search($data, 100, 0, $right) == 6);
var_dump(binary_search($data, 200, 0, $right) == 7);
var_dump(binary_search($data, 300, 0, $right) == 8);
var_dump(binary_search($data, -1, 0, $right) == -1);
var_dump(binary_search_recursive($data, 1, 0, $right) == 0);
var_dump(binary_search_recursive($data, 2, 0, $right) == 1);
var_dump(binary_search_recursive($data, 3, 0, $right) == 2);
var_dump(binary_search_recursive($data, 10, 0, $right) == 3);
var_dump(binary_search_recursive($data, 20, 0, $right) == 4);
var_dump(binary_search_recursive($data, 30, 0, $right) == 5);
var_dump(binary_search_recursive($data, 100, 0, $right) == 6);
var_dump(binary_search_recursive($data, 200, 0, $right) == 7);
var_dump(binary_search_recursive($data, 300, 0, $right) == 8);
var_dump(binary_search_recursive($data, -1, 0, $right) == -1);
