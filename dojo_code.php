<?php

function hasAPair(array $hand): bool
{
    $occurences = array_count_values($hand);
    if (in_array(2, $occurences) || in_array(3, $occurences))
        return true;
    else return false;
}

function hasThreeOfAKind(array $hand): bool
{
    $occurences = array_count_values($hand);
    if (in_array(3, $occurences))
        return true;
    else return false;
}

function hasASquare(array $hand): bool
{
    $occurences = array_count_values($hand);
    if (in_array(4, $occurences))
        return true;
    else return false;
}

function hasAFull(array $hand): bool
{
    $occurences = array_count_values($hand);
    if (in_array(3, $occurences) && in_array(2, $occurences))
        return true;
    else return false;
}

function hasAStraight(array $hand): bool
{
    
}
