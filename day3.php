<?php

function leetify($str) {
  for($k = 0; $k < strlen($str); $k++) {

    if($str[$k] == "i" || $str[$k] == "l") {
      $str[$k] = "1";
    }

    if($str[$k] == "o") {
      $str[$k] = "0";
    }

    if($str[$k] == "e") {
      $str[$k] = "3";
    }
    
    if($str[$k] == "t") {
      $str[$k] = "7";
    }
  }
  return $str;
}

echo leetify("hi, world");
echo '<br>';
echo leetify("isn't this cool or what");
?>

