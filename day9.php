<?php
// Intro to PHP Day 9

// Quiz
// Write `function doubleEveryCharacter($str)`. This function should accept
// a string and return a string with each character repeated twice. For
// example, `doubleEveryCharacter("blargle")` should return 
// "bbllaarrggllee".

function doubleEveryCharacter($str) {
  $doubled = "";
  $len = strlen($str);

  for ($k = 0; $k < $len; $k++) {
    $doubled = $doubled . $str[$k] . $str[$k];
  }
  return $doubled;
}














// Hidden Form Elements: <input type="hidden"...
// Exactly like a text box, but the user can't see it.
// Used to pass data back to PHP on subsequent calls
?>
<input type="hidden" name="id" value="42">

<?php

// Why are they useful? 
// Suppose we wanted to modify or delete a TODO item. 
// How will PHP know which one we want to delete?
// We can put a little form by each one with a "hidden" input specifying
// that item's id.

// The form will have 3 input tags:
// 1 "hidden" input containing the TODO item's ID
// 1 submit button for deleting the TODO item
// 1 submit button for editing the TODO item (later)

// for each row in the result:
foreach ($result as $row) {
  // first display the todo item
  echo $row['item'];

  // then display the delete form
  echo "<form>";
  echo "<input type='hidden' name='id' value='$row[id]'>";
  echo "<input type='submit' name='submit' value='delete'>";
  echo "</form>";
}

// Now, when the delete button is clicked, we'll get POST data
// consisting of:
// 1. The todo item's ID
// 2. The value 'delete' in $_POST['submit']

// But how do we actually delete the item?

$delStatement = $db->prepare("DELETE FROM todo_list WHERE id = ?");

// Get the secret id field from the form and fill in the ?
$delStatement->bind_param("i", $_POST['id']);
// Actually delete it
$delStatement->execute();

// APIs: Google Maps

// Application Programming Interface
// A standard that a company develops so that other people can write
// programs that work with their software.

// Show page for Maps Static API

// https://maps.googleapis.com/maps/api/staticmap?center=78702&zoom=14&size=400x400

// How to use from HTML?
?>

<!-- img tag is used to display an image -->
<img src="http://i.imgur.com/k5SyHiV.gif">

<img src="https://maps.googleapis.com/maps/api/staticmap?center=78702&zoom=14&size=400x400">

<!-- Formify it! -->
