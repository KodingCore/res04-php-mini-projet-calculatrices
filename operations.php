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

function power(int $nb1, int $nb2) : int
{
    if($nb2 === 0){
        return null;
    }else{
        $res = pow($nb1, $nb2);
        return $res;
    }
}

function factorial(int $nb1) : int
{
    if($nb1 === 0){
        return 1;
    }else{
        $res = 1;
        for($i=1; $i <= $nb1; $i++){
            $res = $res * $i;
        }
        return $res;
    }
    
}

?>