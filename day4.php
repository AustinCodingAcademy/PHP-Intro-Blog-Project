<?php

if(isset($_GET['submit'])) {
  // form processing goes here
  echo $_GET['first_name'];
  echo '<br>';
  echo $_GET['email'];
  echo '<br>';

  if(strpos($_POST['email'], '@') === FALSE) {
    // no @ in the email
  } else if(strpos($_POST['email'], '.') === FALSE) {
    // no . in the email
  } else {
    // all good
  }

}

// Your task:
//    1. Change to POST
//    2. Echo error messages if:
//           No name was entered
//           No email was entered
//           Email does not contain @
//               and . (strpos)
?>

<form action="day4.php" method="GET">

<input type="text" name="first_name" value="Enter your first name" onclick="this.value=''"><br>
<input type="text" name="email" value="Enter your email!" onclick="this.value=''"><br>

<input type="submit" name="submit" value="Subscribe to our mailing list!">

</form>
