<?php
// Intro to PHP Day 5 Topics


// Quiz

// Make a page with a text field and submit button. When the form is submitted, display the value entered in the text field on the page in bold and italic. 


// Form Activity

// Create a text field and submit button.
// When the form is submitted, run the value of the text field through the function of your choice, and display the result.


print_r($_POST);
echo '<br><br><br>';

if (isset($_POST['submit'])) {
  echo "$_POST[company]<br><br>";

  echo "This company has $_POST[employee_count] employees.";

  if($_POST["is_public"] == "Yes") {
    echo "It is a public company.";
  } else {
    echo "It is not a public company.";
  }

  echo "<br><br>";

}
?>

<form action="day5.php" method="POST">
  Company: <input type="text" name="company"><br>

  <select name="employee_count">
    <option>0-50</option>
    <option>51-100</option>
    <option>101-250</option>
    <option>251+</option>
  </select><br><br>

  Is this a public company? <br>

  <input type="radio" name="is_public" value="Yes" checked>Yes<br>
  <input type="radio" name="is_public" value="No">No<br><br>

  Perks of working here:<br>
  <input type="checkbox" name="pool_table"> Pool table<br>
  <input type="checkbox" name="free_lunch"> Catered lunch<br>
  <input type="checkbox" name="slurpee_machine"> Slurpee machine<br>
  <input type="checkbox" name="fireman_pole"> Fireman's pole<br>
  <input type="checkbox" name="ping_pong"> Ping-pong table<br><br>

  Why do you want to work here?
  <textarea name="comments" rows="10" cols="40">
    Enter your comments here...........
  </textarea>

  <input type="submit" name="submit" value="Get average salary">


</form>










<?php

// More form tags
//   - Check boxes
//   - Text area



// Coding example problem:
// Combine forms with leetspeak-ify or remove vowels function from earlier 
// Talk about require_once and include

?>
