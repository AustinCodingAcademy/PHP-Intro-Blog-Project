<?php
// Intro to PHP Day 7 Topics

// Quiz
// ----
// 1. Categorize the following terms into 2 groups.
//     - instance method
//     - field
//     - member variable
//     - method
//     - attribute
//     - member function
//     - instance variable
//
// 2. a. What is the special function that PHP calls when you use the `new`
//       keyword? What is the name for this /kind/ of function?
//    b. What operator is used to access any object's members?
//    c. What keyword is used when accessing the 'current' object's members?

class Student {
  public $name;
  public $gpa;
  public $credit_hours;

  function __construct($name, $gpa, $hours) {
    $this->name = $name;
    $this->gpa = $gpa;
    $this->credit_hours = $hours;
  }

  function enrollment_status() {
    if ($this->credit_hours >= 12) {
      return 'full-time';
    } else {
      return 'part-time';
    }
  }

  function letter_grade() {
    if ($this->gpa >= 3.0) {
      return 'A';
    } else if ($this->gpa >= 2.0) {
      return 'B';
    } else if ($this->gpa >= 1.0) {
      return 'C';
    } else {
      return 'F';
    }
  }
}

// More OOP: Inheritance
// Imagine we're writing a game, and we've created a class for players and
// a class for monsters:
class _Monster {
  public $xCoord;
  public $yCoord;
  public $health;
  public $drops;
}

// A Player is almost the same as a Monster, but we need to store the
// player's username and inventory instead of the monster's drop items.
class _Player {
  public $xCoord;
  public $yCoord;
  public $health;
  public $username;
  public $inventory;
}

// We already know that duplicate code is Bad™. How can we eliminate this
// redundancy? Inheritance!

// Let's bring back our old class GameCharacter, and put the common
// attributes in there.
class GameCharacter {
  public $xCoord;
  public $yCoord;
  public $health;
  
  function __construct($x, $y, $health) {
    $this->xCoord = $x;
    $this->yCoord = $y;
    $this->health = $health;
  }

  function walkAround() { /* ... */ }
  function attack() { /* ... */ }
}

// Now we can take advantage of this when creating our Player and Monster.
// We use inheritance with the keyword "extends".
class Player extends GameCharacter {
  // $xCoord, $yCoord, and $health are inherited from GameCharacter
  public $username;
  public $inventory;
}

class Monster extends GameCharacter {
  public $drops;

  function __construct($drops) {

    parent::__construct(50, 60, 70);

    $this->drops = $drops;

  }
}

// Monster has no explicit definition of xCoord, yCoord, and health....
$monster = new Monster(1, 2, 3, 4);
echo $monster->xCoord . "<br>";
echo $monster->yCoord . "<br>";
echo $monster->health . "<br>";
// But it's valid!

// CS terms: The _superclass_ is the parent class
//           The _subclass_   is the child class

// The same member functions can be in the parent and child class.
// This is called overriding.
class Super {
  function sayHi() {
    echo 'hi from super!';
  }
}

class Sub extends Super {
  function sayHi() {
    echo 'hi from sub!';
  }
}

$sup = new Super();
$sup->sayHi();
echo '<br>';
$sub = new Sub();
$sub->sayHi();
echo '<br>';
// The same member variables cannot.

class Test {
  public $member;

  function a() {
    $test = 5;            // separate from $test in b()
    $this->member = 10;   // same member variable
  }

  function b() {
    $test = 6;            // separate from $test in a()
    $this->member = 20;   // same member variable
  }
}



// Formalizing OOP: Inheritance and Encapsulation

// Inheritance is what we just did above.
// Encapsulation is the idea that data should be packaged together with
// the functions that operate on that data.

// Together, inheritance and encapsulation allow us to create clean, 
// easily reusable modules of code called classes.

// Assignment:
// Write class Vehicle. A Vehicle has a number of wheels and a name.

// Each subclass of Vehicle has a function
// called `drive`. `drive` should print "Driving a ___ with ___ wheels"
// where the first blank is the type of Vehicle and the second blank
// is the number of wheels.

// Write subclasses Bicycle and Car that extend Vehicle.
// A Bicycle has 2 wheels and a car has 4.

class Vehicle {
  public $type;
  public $num_wheels;

  function __construct($type, $wheels) {
    $this->type = $type;
    $this->num_wheels = $wheels;
  }

  function drive() {
    echo "Driving a $this->type with $this->num_wheels wheels.";
  }
}

class Car extends Vehicle {
  public $gas;
  function __construct() {
    parent::__construct("car", 4);
    $this->gas = 100;
  }

  function drive() {
    parent::drive();
    $this->gas -= 5;
    echo "Now I have $this->gas percent of gas left.<br>";
  }
}

class Bicycle extends Vehicle {
  public $helmet;
  function __construct($helmet) {
    parent::__construct("bike", 2);
    $this->helmet = $helmet;
  }

  function switchHelmet($newHelmet) {
    $this->helmet = $newHelmet;
  }

  function drive() {
    parent::drive();
    echo "Wearing a $this->helmet.<br>";
  }
}


// Advanced: A Car needs gas. Add a member variable representing how much
//           gas is left in the Car. `gas` starts out as 100, and when
//           the Car is driven, it decreases by 5. 
//           Modify the drive() method to echo how much gas is left.

//           Riding a Bicycle safely requires a helmet. Add a parameter
//           to Bicycle's constructor that specifies what type of helmet
//           is being used. Add a new function "switchHelmet" that allows
//           a rider to put on a different helmet. Echo the helmet that's
//           in use in drive().

$bike = new Bicycle("bell");
echo $bike->drive(); // prints 'Riding a bike with 2 wheels'

$car = new Car();
echo $car->drive(); // prints 'Driving a car with 4 wheels'
?>
