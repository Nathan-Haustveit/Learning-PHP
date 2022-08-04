<?php
//Let’s look at an example of creating a variable:
//
//$my_name = "Aisle Nevertell";
//In the code above, we’re actually doing two things with a single statement: we’re declaring a new variable by giving it the name my_name. We’re also assigning it the value "Aisle Nevertell". The variable $my_name now holds the value "Aisle Nevertell".
//
//To declare a variable we use the dollar sign character ($) followed by our chosen variable name. The dollar sign is known as a sigil; it’s a character that allows the computer to see quickly that something is a variable.
//
//To assign it a value we use another operator: the assignment operator (=) followed by the value we’re assigning to the variable.
//
//Though it can occasionally be useful to separate these actions, we’ll most often be declaring and assigning variables at the same time.
//
//syntax diagram
//
//In PHP, variables names can contain numbers, letters, and underscores (_), but they have to start with either a letter or an underscore. Variable names are case sensitive, meaning that PHP will treat the variables $my_example and $My_example as two different variables.
//
//One common convention when naming PHP variables is to use an underscore between words on variable names with more than one word in their name. This is known as snake case:
//
//$mood = ":)";
//$favorite_food = "Red curry with eggplant";
//Let’s create some variables!
//
//Instructions
//1.
//Create a variable and assign to it a string value. You can give the variable any valid name you’d like and assign a string containing anything you want. End the statement with a semicolon.
//
//Checkpoint 2 Passed
//
//Stuck? Get a hint
//2.
//Declare a variable $biography and assign to it a string that starts with a new line character and contains a sentence or two about you.
//
//Checkpoint 3 Passed
//
//Stuck? Get a hint
//3.
//Create a variable $favorite_food and assign to it the string "\n", "tur", "duck", and "en" concatenated together.

$my_name = "Nate";

$biography = "\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

$favorite_food = "\n" . "tur" . "duck" . "en";