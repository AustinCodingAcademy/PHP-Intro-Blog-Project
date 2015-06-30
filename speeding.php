<?php
function speedingTicket($speed, $limit) {
  $amtOver = $speed - $limit;
  if ($amtOver < 10) {
    return 0;
  } else if ($amountOver >= 10 && $amountOver <= 15) {
    return 50 + 2 * $amtOver;
  } else if ($amountOver >= 16 && $amountOver <= 20) {
    return 75 + 3 * $amtOver;
  } else {
    return 150 + 5 * $amtOver;
  }
}
?>
