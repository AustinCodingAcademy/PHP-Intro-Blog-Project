# Intro to PHP Homeworks

## Day 1

1. Write a program that uses `echo` and the `.` operator to display a number and a word in one line of code.

2. What does the `$` character mean in PHP?

3. True or false:
    - The value of a variable can never be changed.
    - A string cannot contain numbers, only letters.
    - PHP code starts with `<?php` and ends with `?>`.

4. In PHP, what is the difference between the `.` operator and the `+` operator?

5. Go to https://news.ycombinator.com/ and find an article about programming or startups that speaks to you. Contribute to the discussion with a comment.

## Day 2

1. What is the output of the following code?

       <?php

           $j = 5;
           $k = 3;
           
           echo 'a';
           
           if($j < 10) {
               echo 'b';
               $k += 1;
               if($k > 5) {
                   echo 'c';
               } else {
                   echo 'd';
               }
           }
           
           echo 'e';

       ?>
    
2. What is the output of the following code?

       <?php
           echo "I'm a string! ";
           echo 'I\'m another string! ';
           echo 'And I\\\'m another.';
       ?>

3. True or false:
    - The `%` operator gives the remainder of a division.
    - The values of variables are substituted into single-quoted strings.
    - In PHP, the type of every variable must be specified by the programmer.

4. Match each PHP operator to its meaning.

<table style="text-align: center; width: 50%">
    <tr>
        <th>Operators</th>
        <th>Meanings</th>
    </tr>
    <tr>
        <td>+</td>
        <td>Decrement</td>
    </tr>
    <tr>
        <td>-</td>
        <td>Concatenation</td>
    </tr>
    <tr>
        <td>++</td>
        <td>Addition</td>
    </tr>
    <tr>
        <td>--</td>
        <td>Increment</td>
    </tr>
    <tr>
        <td>.</td>
        <td>Subtraction</td>
    </tr>
</table>

5. Go to the PHP documentation at http://php.net/manual/en/. Pick a page under "Language Reference" that looks interesting to you and familiarize yourself with the style of PHP's documentation.

## Day 3

1. Write a program that creates an array that is initially empty. Then, add 10 items to the array.

2. Write a program that creates an array that starts out with the 10 items in it -- i.e., create it and add the 10 items all in one line of code.

3. What programming construct is used to run a section of code many times? How would you use this to display all the items in an array?

## Day 4

1. Why are functions useful? What is a reason to add them to your programs?

2. What is the output of the following code?

       <?php
           $my_str = "123 uiop 456";
           echo strtolower($my_str) . " " . strtoupper($my_str);
           echo strtolower($my_str) . " " . strtoupper($my_str);
       ?>

3. True or false:
       - Each function may only be used once in your program.
       - A function can contain as many statements as you want.
       - A function may modify the parameters you give to it.

## Day 5

1.

2.

3.

4.

5.

## Day 6

1.

2.

3.

4.

5.
