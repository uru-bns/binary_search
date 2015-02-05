<?php

function binary_search($data_order_by_ascending, $needle, $left, $right)
{
  $current_left = $left;
  $current_right = $right;

  while ($current_left <= $current_right) {
    $median_index = (int)($current_left + (($current_right - $current_left) / 2));
    $median = $data_order_by_ascending[$median_index];

    if ($median == $needle) {
      return $median_index;
    }

    if ($needle < $median){
      $current_right = $median_index - 1;
    }
    else {
      $current_left = $median_index + 1;
    }
  }

  return -1;
}

function binary_search_recursive($data_order_by_ascending, $needle, $left, $right)
{
  if ($left > $right) {
    return -1;
  }

  $median_index = (int)($left + (($right - $left) / 2));
  $median = $data_order_by_ascending[$median_index];

  if ($median == $needle) {
    return $median_index;
  }

  if ($needle < $median){
    $new_left = $left;
    $new_right = $median_index - 1;
  }
  else {
    $new_left = $median_index + 1;
    $new_right = $right;
  }

  return binary_search($data_order_by_ascending, $needle, $new_left, $new_right);
}
