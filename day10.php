<?php
// Austin Coding Academy
// Intro to PHP Day 10

// Quiz: You have been tasked with determining whether the Austin
// Independent School District's standardized test scores have been
// increasing over the past few years. You decide to write a function to
// handle this task.
//
// Write function `scoresIncreasing($scores)` that returns "true" if each
// entry in the `$scores` array is greater than or equal to the one before
// it, or "false" otherwise.
//
// For example, scoresIncreasing(array(96, 98, 100)) will return "true",
// and scoresIncreasing(array(86, 84, 90)) will return "false", since 84 is
// less than 86.








function scoresIncreasing($scores) {
    for ($k = 1; $k < count($scores); $k++) {
        if ($scores[$k] < $scores[$k - 1]) {
            return "false";
        }
    }
    return "true";
}

// Objectives:
//     - Review SQL from PHP
//     - Learn about Markers and Paths
//     - Try out the Google Street View API
//     - Implement Markers in your Google Maps program
//       from last time to create a dynamically updatable map!

////////////////////////////////////////////////////////////////////////////
// Google Maps API
// Markers
////////////////////////////////////////////////////////////////////////////

// The `markers` parameter
// When specified, we don't need to specify a center or zoom - the map will
// be calculated automatically based on where we place the markers

// Give any marker attributes (like color) first, then give locations.
// Separate values with |

// For example, 
//      markers=color:blue|78701
// would place a blue marker in downtown Austin

// https://maps.googleapis.com/maps/api/staticmap?size=800x400&markers=color:blue|78701|78702|78703|78704|78705

////////////////////////////////////////////////////////////////////////////
// Paths
////////////////////////////////////////////////////////////////////////////

// The `path` parameter
// Basically like `markers`, but draws a line between the points.
// Let's combine `path` and `markers.

// https://maps.googleapis.com/maps/api/staticmap?size=800x400&markers=303%20Colorado%20St%2078701|1402%20E%2013th%20St%2078702&path=303%20Colorado%20St%2078701|1402%20E%2013th%20St%2078702

////////////////////////////////////////////////////////////////////////////
// Street View
////////////////////////////////////////////////////////////////////////////

// https://maps.googleapis.com/maps/api/streetview?location=1100%20Congress%20Ave%2078701&size=640x400

// Programming Task:
// Adapt the Google Maps program from last time to use Markers and Paths.

// - We will need a way to store the marker locations from page load to
//   page load. We will use a MySQL table for this task.

// - Every time the user adds a marker, we will add a row to the markers
//   table. 

// - Then, to display the map, we will get all the marker locations from the
//   table, and append them to the map URL.

// 1. Create a `markers` table that will hold the address of each marker
//    to be placed on the map.
// 2. Create a form that allows the user to type an address. When the form
//    is submitted, insert the address into the `markers` table.
// 3. Write a SELECT query that gets all of the markers from the table.
//    Use a `foreach` loop to build up a map URL based on all of the 
//    markers, separated by '|'.
// 4. Put your specially crafted map URL in an <img> tag to display the map!
//     https://maps.googleapis.com/maps/api/staticmap?size=400x400&markers=
// Extra Credit:
//    Add a 'clear map' button that removes all the markers from the table.
?>
