<?php
function assoc_array_sort($a, $b, $key, $sequence = 'ASC')
{
/*
* Simple function for sorting between 2 values
* Designed to be called within the function called by usort or uasort
*
* $key is the key for the associative array so if we want to compare values of $array['my_key']
* $key would be set to 'my_key'
*
* Default sequence is ASC but can reverse sort by passing DESC instead
*/
if (strtoupper($sequence) == 'DESC') {
  $lower = 1;
  $higher = -1;
} else {
  $lower = -1;
  $higher = 1;
}

if ($a[$key] == $b[$key]) {
  return 0;
  } else if ($a[$key] &lt; $b[$key]) {
    return $lower;
    } else {
      return $higher;
    }
}
?>
