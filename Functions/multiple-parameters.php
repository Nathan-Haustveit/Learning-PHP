<?php
//1.
//Write a function calculateArea() that takes in two number arguments—representing the height and width of a rectangle—and returns the area of that rectangle.
//
//Checkpoint 2 Passed
//
//Stuck? Get a hint
//2.
//Use echo to print the result of invoking your calculateArea() function with two number arguments.
//
//Checkpoint 3 Passed
//
//Stuck? Get a hint
//3.
//Write a function calculateVolume() that takes in three number arguments—representing the height, width, and depth of a box—and returns the volume of that box.
//
//Checkpoint 4 Passed
//
//Stuck? Get a hint
//4.
//Use echo to print the result of invoking your calculateVolume() function with three number arguments.

function calculateArea($height, $width){
    $area = $height * $width;
    return $area;
}

echo calculateArea(2, 3);

function calculateVolume($height, $width, $depth){
    $volume = $height * $width * $depth;
    return $volume;
}

echo calculateVolume(2, 3, 4);