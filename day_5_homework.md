# Day 5 Homework

*Try placing today's functions all together in a separate file and using `require_once` to reference them from your HTML document!*

1. Write `function stringTimes($str, $times)` that returns the string `$str` repeated `$times` times. For example, `stringTimes('blargle', 3)` should return `blargleblargleblargle`.

2. Write `function letterCount($str, $letter)` that returns the number of times `$letter` occurs in `$str`. For example, `letterTimes('Mississippi', 'i')` should return `4`.

3. Write `function has456($array)` that returns `true` if `$array` contains the sequence 4, 5, 6 somewhere and `false` otherwise.

   For example, `has456(array(0, 1, 2, 5))` would return `false`, while `has456(array(0, 4, 5, 6, 4))` would return `true`, since the array contains 4, 5, 6 in that order.

4. Write `function speedingTicket($speed, $limit)` that calculates the cost of a speeding ticket based on your actual speed, `$speed`, and the speed limit, `$limit`.

   If you were speeding by less than 10 mph over the limit, you will not get a ticket.
   
   If you were going between 11 and 15 mph over the limit, your ticket will be $50 + 2 times the amount over the limit.
   
   If you were going between 16 and 20 mph over the limit, your ticket will be $75 + 3 times the amount over the limit.
   
   If you were going more than 21 mph over the limit, your ticket will be $150 + 5 times the amount over the limit.
   
   Your function should return the cost of the ticket, or `0` if no ticket was given.