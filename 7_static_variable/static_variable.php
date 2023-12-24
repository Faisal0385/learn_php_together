<?php

function addToTotal()
{
    static $total = 0;
    $total += 100;
    echo "Total amount: " . $total . "<br>";
}

addToTotal();
addToTotal();

function incrementCounter()
{
    static $counter = 0;
    $counter++;
    echo "Counter: " . $counter . "<br>";
}

incrementCounter();
incrementCounter();
incrementCounter();

function AddItems()
{
    static $items = 0;
    $items++;
    echo "No. of items: " . $items . "<br>";
}

AddItems();
AddItems();
AddItems();
