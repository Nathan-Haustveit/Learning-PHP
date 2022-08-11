<?php
//1.
//Write a function increaseEnthusiasm() which takes in a string parameter and returns that string appended with an exclamation mark.
//
//Checkpoint 2 Passed
//
//Stuck? Get a hint
//2.
//Use echo to print the result of invoking your increaseEnthusiasm() function with a string of your choice.
//
//Checkpoint 3 Passed
//
//Stuck? Get a hint
//3.
//Write a function repeatThreeTimes() which takes in a string parameter and returns that string repeated three times (without introducing characters which didn’t appear in the original string).
//
//Checkpoint 4 Passed
//
//Stuck? Get a hint
//4.
//Use echo to print the result of invoking your repeatThreeTimes() function with a string of your choice.
//
//Checkpoint 5 Passed
//
//Stuck? Get a hint
//5.
//Ready for a little trickiness? Use echo to print the result of invoking your increaseEnthusiasm() with the result of invoking repeatThreeTimes() as the argument passed into increaseEnthusiasm(). You can choose any string you like for the argument to repeatThreeTimes().

function increaseEnthusiasm($string){
    return $string . "!";
}

echo increaseEnthusiasm("Whats Up");

function repeatThreeTimes($str){
    return $str . $str  . $str;
}

echo repeatThreeTimes("hey");

echo increaseEnthusiasm(repeatThreeTimes("hey"));