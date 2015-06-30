# Notes from Class, Day 1 #

Welcome to the ACA Intro to Backend PHP Programming class!  We covered quite a bit of ground today.
Here is some review.


## PHP and HTML, and how they work together ##

As we talked about in class, we're in an interesting position here doing Web Programming.
Even though the class is about PHP, we will really be working with 3 or 4 different languages:
PHP, HTML, CSS and possibly some Javascript.  Here's a quick break-down of what happens
when you use your Web Browser to open a Web Page:

* **Request** - Your computer sends a request to another computer (called the server) out there on the Internet,
  requesting a particular URL.

* **Back-end Processing** - The server runs some back-end code to determine what information to send back to your computer.
  Depending on how they programmed the website, that code will often (but not always) be PHP.

* **Response** - After PHP (or whatever backend scripting language) decides what data to send, 
  the server sends the data (called the response) back to your computer.  The data the server sends
  is often (but not always) in HTML format, so your browser will know how to display it as a
  Web Page.  It may also include CSS (style rules for how to show the HTML), or also Javascript
  (code that will run in your browser to make the page more interactive).

* **Front-end Rendering** - Your browser takes the HTML data from the server and displays it
  on the screen.  This process is known as rendering.

* **Javascript Interactivity** - Now that the page is loaded in your browser, you can read it
  and interact with it.  The server often sends Javascript code in addition to the HTML code.
  This code runs within your browser and adds additional interactivity and functionality, such
  as showing or hiding content when you click on a button.


## Text Files and Text Editors ##

Almost all programming involved writing code into files so that the code files can be run by the
computer.  Regardless of whether you are writing PHP, HTML, Javascript or some other language,
the format of your code files will almost always be Plain Text Format.  Windows and Mac both come
with Text Editors that can edit Plain Text files (NotePad for Windows, and TextEdit for Mac).

ACA has an Educational License for a Text Editor called **PHPStorm**.  This editor can make your
PHP-editing lives easier by syntax-highlighting your code to make it more readable, and auto-completing
your code with suggestions of what code to type.  Feel free to download the trial version
[here](https://www.jetbrains.com/phpstorm/), and we will give you the License Code to put in
shortly so you have access to the full Text Editor.

Other Text Editors you might want to try:

* On Mac: TextMate or TextWrangler
* On Windows: NotePad++
* On either one: Sublime Text


## Using `<?php ?>` tags to Activate the PHP Processor ##

PHP is unique among programming languages in that you don't have to use it all the time in your
whole file: any text you type normally will just be relayed directly to the users Web Browser.
Therefore it's extremely easy to create HTML pages within PHP without having to type any special
PHP code, and then you can invoke PHP just for the dynamic parts where you actually need the
computer to make a decision about what to do.  For example, the following is just plain HTML,
no PHP code involved:

    <html>
        <head></head>
        <body>
            <h1>Hello ACA!</h1>
            <p>This is an example of a web page</p>
        </body>
    </html>

But yet that you can use that exact code in a .php file with no modifications!

In order to invoke PHP, use `<?php` and then everything after that will be PHP code.
When you're doing typing PHP and want to go back to HTML, type `?>`.  Example:

    <html>
        <head></head>
        <body>
            <h1>Hello ACA!</h1>
    <?php
            echo '<p>This is written by PHP!</p>';
    ?>
        </body>
    </html>


## Using `echo` to Print Stuff Out on the Screen ##

Notice the PHP code in the last example.  We used `echo` to tell PHP to print
a message out to the screen.  When you're not inside `<?php ?>` tags, you don't
need `echo` because *everything* is automatically printed out to the screen.
So why, you might ask, would you ever use `echo`?  You'll see...


### Single Quotes vs Double Quotes ###

Back to our example:

    <?php
        echo '<p>This is written by PHP!</p>';
    ?>

We said `echo`, followed by the message we want to print out, followed by a semicolon, "`;`".
The message was surrounded by **single quotes**, "`'`".  The single quotes tell PHP that what's
inside is a textual message that should be considered a string of characters.  In fact, this
kind of textual message in programming is called a **string**.

Note that we could have used **double quotes** instead of single quotes, it would have worked
just the same.  What's the difference between single quotes and double quotes?  You'll find out
in the next section about Variables!

## Variables
- A place in the computer's memory with a name
- Created with $ followed by the variable's name
- Names must start with a letter but can contain numbers
- Can hold multiple types of data: strings, numbers, decimals, etc.

## Conditions
- Used in `if` statements and `while`, `do...while`, and `for` loops
- `>`: greater than
- `<`: less than
- `>=`: greater than or equal
- `<=`: less than or equal
- `==`: equal to
- `!=`: not equal to

## `=` vs. `==`
- `=` is used when giving a variable a value, ex. `$x = 5;`
- `==` is used when comparing, ex. `if($x == 5) { <code here> }`

## Escaping quotation marks
- If you want to use a ' inside of a single-quoted string, use \'
- If you want to use a " inside of a double-quoted string, use \"

## rand()
- One of the functions built into PHP
- Use by providing a minimum and maximum value, ex. `$var = rand(110, 220);`

## Modulo operator (`%`)
- Provides the remainder from division
- ex. 5 % 3 == 2
- To check if a number is even, use `$num % 2 == 0`

## Loops
- while

      $x = 0;
      while($x < 5) {
          $x++;
          echo "$x<br>";
      }

- do...while (this would only print 15)

      $x = 15;
      do {
          echo "$x<br>";
      } while($x < 10);

- for

      for($k = 0; $k < 10; $k++) {
          echo "$k ";
      }

## Switching between HTML and PHP
    <?php 
    $k = 5;
    if($k < 10) {
    ?>
    <b>Less than 10!</b>
    <?php } ?>

