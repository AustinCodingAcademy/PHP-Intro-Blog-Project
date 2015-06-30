<?php
// Intro to PHP Day 8

// Quiz
// Write 'function combineStrings($a, $b)' that accepts 2 strings $a and $b and
// returns a combined string with a copy of the shorter string on either side and the
// longer string on the inside between them.

// For example, combineStrings('hi', 'world') should return 'hiworldhi' and
// combineStrings('pneumonoultramicroscopicsilicovolcanoconiosis', 'what') should
// return 'whatpneumonoultramicroscopicsilicovolcanoconiosiswhat'.

// Databases
// Review: A place where you can store structured and persistent data
//             - Structured: the data is stored in tables with columns, which are
//                           defined in a specific format called a schema
//             - Persistent: the data lives on your server, and so it lasts beyond
//                           the life of the current web request. It even stays
//                           around if your server restarts.

// 4 basic operations: CRUD
// Create: INSERT INTO customer (name, email) VALUES ("Shirley", "shirley@gmail.com");
// Read:   SELECT * FROM customer WHERE name = "John";
// Update: UPDATE customer SET name="Jon" WHERE name="John" AND customer_id = 1;
// Delete: DELETE FROM customer WHERE customer_id = 5;

// Creating some example tables from the command line
// 1. WINDOWS: cd \vm
//    MAC OS : cd Desktop/VirtualMachines
// 2. vagrant ssh
// 3. mysql -u root -proot

// CREATE DATABASE intro_to_php;
// CREATE TABLE todo_list (id INT NOT NULL AUTO_INCREMENT, item TEXT, 
//                         PRIMARY KEY(id));

// Using this stuff from PHP

// Creating a connection
// mysqli's __construct takes 4 things: a database server address, a username,
// a password, and a database name
// (http://php.net/manual/en/mysqli.quickstart.connections.php)
// localhost == 127.0.0.1 (Same server as the one running the PHP)

$db = new mysqli("localhost", "root", "root", "intro_to_php");
if ($db->connect_errno) {
  echo "Failed to connect to MySQL :(<br>";
  echo $db->connect_error;
}
// Running queries
// We use the method `prepare` to load an INSERT SQL statement in PHP.
$stmt = $db->prepare("INSERT INTO todo_list (item) VALUES (?)");

// ? - things we want to substitute in
// i  corresponding variable has type integer
// d  corresponding variable has type double
// s  corresponding variable has type string
$item = "Make coffee";
$stmt->bind_param("s", $item);

// Actually run the statement with the parameters we've substituted
$stmt->execute();

// Let's add another item to the todo list. We can reuse the same $stmt multiple
// times while substituting in different values for the ?.
$item = "Write some code";
$stmt->execute();

$item = "Collect paycheck";
$stmt->execute();

// Let's go back to the terminal and look at what we just added.

// How to do that SELECT in PHP?
// We use query() to run a SELECT.

$sql = "SELECT * FROM todo_list";
$result = $db->query($sql);
if ($result) {

  foreach ($result as $row) {
    echo $row['item'] . "<br>";    
  }

} else {
  echo $db->error;
}

// Programming Assignment 1:
// Modify the to-do list page from last class to use MySQL.
// When the "submit" button is clicked, add a row to the todo_list table
// containing the value of the text field.

// When the page is loaded, display all of the todo items.
?>

<!-- More HTML: Tables -->
<table border="1">              <!-- start a table -->
  <tr>                          <!-- first row -->
    <th>Todo Item</th>          <!-- header -->
  </tr>                         <!-- end first row -->
  <tr>                          <!-- second row -->
    <td>Make coffee</td>
  </tr>                         <!-- end second row -->
  <tr>                          <!-- third row -->
    <td>Write code</td>
  </tr>                         <!-- end third row -->
</table>                        <!-- end the table -->

<!-- Programming Assignment 2: Modify your todo list to use a table.

     Extra credit (maybe?): Add a date column to your todo_list table.
     Save the current date/time when a todo item is added. -->
