<?php
$input = fgets(STDIN);

$array_str = explode(" ",$input);

sort($array_str);

$new_array = $array_str;

foreach($array_str as $k=>$v){
  $strings = str_slipt($v);
  foreach($new_array as $x=>$y){
    $new_strings = $y;
  }
}

//echo $str;
?>
