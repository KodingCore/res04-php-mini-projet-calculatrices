<?php


function add(int $nb1, int $nb2) : int
{
    $res = $nb1 + $nb2;
    return $res;
}

function substract(int $nb1, int $nb2) : int
{
    $res = $nb1 - $nb2;
    return $res;
}

function multiply(int $nb1, int $nb2) : int
{
    $res = $nb1 * $nb2;
    return $res;
}

function divide(int $nb1, int $nb2) : ? int
{
    if($nb2 === 0){
        return null;
    }else{
        $res = $nb1 / $nb2;
        return $res;
    }
    
}

function modulo(int $nb1, int $nb2) : ? int
{
    if($nb2 === 0){
        return null;
    }else{
        $res = $nb1 % $nb2;
        return $res;
    }
    
}

?>