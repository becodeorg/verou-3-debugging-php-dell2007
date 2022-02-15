<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// === Exercise 1 ===
// Below we're defining a function, but it doesn't work when we run it.
// Look at the error you get, read it and it should tell you the issue...,
// sometimes, even your IDE can tell you what's wrong
// echo "Exercise 1 starts here:";
echo "Exercise 1 starts here:";

function new_exercise($x) /*Declare the variable so it can be use*/
{
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}

new_exercise(2);

// === Exercise 2 ===
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0]; /*Change number to 0 as this is the first one in the array*/

echo $monday;

new_exercise(3);

// === Exercise 3 ===
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed

$str = "Debugged ! Also very fun"; /*Change the quotes*/
echo substr($str, 0, 10); /*Offset # will delete from the beginning and length will keep those letters*/

new_exercise(4);

// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it
// Bonus: can you fix it with changing just one character? (hard)

foreach ($week as &$day) { /*Add & sign to make possible the changes otherwise it'll only take the value*/
    $day = substr($day, 0, -3);
}

print_r($week);

new_exercise(5);
// === Exercise 5 ===
// The result should be: "Copyright © <current year> - BeCode"
function copyright(int $year)
{
    return "Copyright &copy; $year BeCode";
}
//print the copyright
echo copyright(date('Y'));

new_exercise(6);
// === Exercise 6 ===
// The array should be printing every letter of the alphabet (a-z)
// Fix the code so the for loop pushes each letter of the alphabet in the array

$arr = [];
for ($i = "A"; $i != "AA"; $i++) {
    array_push($arr, $i . ",");
}

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alphabetical array