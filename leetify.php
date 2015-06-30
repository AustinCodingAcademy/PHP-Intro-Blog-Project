<?php

require_once('my_functions.php');

$result = "";
if (isset($_POST['submit'])) {
  $contents = htmlspecialchars($_POST['text']);
  $result = leetify($contents);
}

?>

<h1>THE LEETIFICATOR</h1>

<p>Enter some text that you would like to convert to <s>hacker-speak</s> h4x0r-sp33k.</p>

<form action="leetify.php" method="POST">
  <input type="text" name="text">
  <input type="submit" name="submit">
</form>

<p><strong>Result</strong>: <?php echo $result; ?></p>
