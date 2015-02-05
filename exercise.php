<?php

require_once('./binary_search.php');

$data = explode(',', $argv[1]);
$needle = $argv[2];

sort($data);
print_r($data);

$index = binary_search($data, $needle, 0, count($data) - 1);
if ($index == -1) {
  echo "$needle は見つかりませんでした。\n";
}
else {
  echo "$needle が $index 番目に見つかりました。\n";
}
