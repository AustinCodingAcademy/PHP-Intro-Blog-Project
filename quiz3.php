<?php
$myArray = array();

for($k = 0; $k < 10; $k++) {
  $myArray[] = rand(1, 10);
}


for($k = 0; $k < 10; $k++) {
  echo "$myArray[$k]<br>";
}

?>
