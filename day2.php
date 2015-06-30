<?php

$degrees = array("Marketing" => 120, 
                 "Electrical Engineering" => 130, 
                 "Integrative Studies" => 110, 
                 "Feminist Studies" => 120,
                 "Computer Science"=> 100);

foreach($degrees as $deg => $hours) {

  echo "$deg takes $hours hours!<br>";

}

$degrees["Biology"] = 150;

?>
