<?php
//1.
//Run the code to see its current output.
//
//Checkpoint 2 Passed
//
//Stuck? Get a hint
//2.
//The notFound() function should print the string "ERROR: Page not found!\n" and return 404. Fix the notFound() function so that it works as intended.
//
//Checkpoint 3 Passed
//
//Stuck? Get a hint
//3.
//Great work! The greetLearner() function also isn’t quite right… We’d like all three of those echo statements to execute and the function to return "<3". Help!

function notFound()
{
    echo "ERROR: Page not found!\n";
    return 404;
}

function greetLearner()
{
    echo "Hello, Learner!\n";
    echo "I hope you're (still) enjoying PHP!\n";
    echo "Love, Codecademy\n";
    return "<3";
}

// Don't change the code below:

$error = notFound();
$heart = greetLearner();

echo "I received a $error, but it's ok because I also received $heart.";