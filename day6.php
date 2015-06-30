<?php
// Intro to PHP Day 6 Topics

// Quiz

// The squirrels around the UT campus are almost always running
// around. They play if the temperature is within 65 and 85 degrees,
// inclusive. However, if it's summer, the upper temperature limit
// is 95 instead of 85 degrees.

// Write function will_squirrels_play($temp, $summer) that returns
// 'true' if the squirrels will be out playing given the conditions,
// or 'false' otherwise.

// $temp is the temperature, and $summer is 'true' if it is summer.


function will_squirrels_play($temp, $summer) {
  // solution 1:
  if ($summer && $temp >= 65 && $temp <= 95) {
    return 'true';
  } else if (!$summer && $temp >= 65 && $temp <= 85) {
    return 'true';
  }

  return 'false';

  // solution 2:
  if ($summer) {

    if ($temp >= 65 && $temp <= 95) {
      return 'true';
    } else {
      return 'false';
    }

  } else {

    if ($temp >= 65 && $temp <= 85) {
      return 'true';
    } else {
      return 'false';
    }

  }
}

echo will_squirrels_play(50, true);

// Talk about Classes
//     - PHP has some built-in data types
//     - These data types include functions that work on them
//     - You can make your own data types
//     - You can define functions related to your custom data types

// Example: characters in a game
$name = "Bertio Liames";
$level = 10;
$attack = 5;
$defense = 7;
$intellect = 9;

// What if I want to add another character, or a monster?
$name2 = "Narder Arrer";
$level2 = 20;
$attack2 = 15;
$defense2 = 21;
$intellect2 = 17;

// This would quickly get out of hand. What about arrays? That
// would work well, right?
$names = array("Bertio Liames", "Narder Arrer");
$levels = array(10, 20);
$attacks = array(5, 15);
$defenses = array(7, 21);
$intellects = array(9, 17);

// Now I can use loops! And if I want to add more characters, I can
// just append each stat to the relevant array!
foreach ($names as $characterName) {
  echo "$characterName<br>";
}

// Adding a new stat is still confusing. All those arrays would
// add up and become hard to maintain. Besides, we had to write
// "array" 5 times, and duplicating code is bad.
// What if the arrays get out of sync?

// Solution: classes, PHP allows you to make your own data type.
class GameCharacter {
  public $name;
  public $level;
  public $health;
  public $magicPoints;

  function __construct($name, $level, $health, $points) {
    $this->name = $name;
    $this->level = $level;
    $this->health = $health;
    $this->magicPoints = $points;
  }

  function is_dead() {
    if ($this->health == 0) {
      return 'dead';
    } else {
      return 'not dead';
    }
  }

  function can_cast($requiredPoints) { /* your code */ }
}

// We have created a data type called GameCharacter.
// Just like there are strings and integers, now there are
// GameCharacters.
// We have specified that each GC will contain name, level, etc

// *Does not actually make any characters*, just tells PHP
// what a GameCharacter is made up of.

// How to create one? Call the constructor -- a special function that
// sets up the object with the given parameters.

$player = new GameCharacter("Narder Arrer", 20, 15, 30);

// accessing member variables
//           instance variables
//           fields
//           attributes
echo $player->name . "<br>";
echo $player->level . "<br>";

$player2 = new GameCharacter("Master Chief", 999, 0, 10);

echo $player2->name . "<br>";
echo $player2->level . "<br>";

// Does not actually copy anything - just redirects player to point at 
// player2's object
$player = $player2;

echo $player->name . "<br>";
echo $player->level . "<br>";

// How to call member functions
//             instance methods
//             methods
echo $player->is_dead() . "<br>";

// INVALID:
// echo "string"->is_dead();
// echo 5->is_dead();

echo $player->can_cast(5) . "<br>";

// Assignment: Write the class Circle.
// A circle has a center point and a radius.
// A circle should know how to calculate its area and perimeter.
// How many variables will your class need? What are their types?
// How many functions will your class need? What will they return?
// ADVANCED: function translate ($deltaX, $deltaY) { ... }
// ADVANCED: function ptInCircle ($x, $y) { ... }
                    // center X = 10
                    // center Y = 10
                    // radius   = 50
echo pi();
$circle = new Circle(10, 10, 50);
echo $circle->area();
echo $circle->perimeter();

?>
