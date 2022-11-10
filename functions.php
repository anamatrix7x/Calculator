<?php


function calc($n1,$op,$n2){ 
    $result;
    switch ($op){
        case 'add':
            $result = $n1 + $n2;
            break;
        case 'sub':
            $result = $n1 - $n2;
            break;
        case 'mul':
            $result = $n1 * $n2;
            break;
        case 'div':
            $result = $n1 / $n2;
            break;
        default:
        $result = 'There is an error!';
        break;
    }
    return $result;

}

if($_SERVER['REQUEST_METHOD'] == "GET"){ 

    $op = $_GET['oper'];
    $n1 = $_GET['num01'];
    $n2 = $_GET['num02'];

    echo calc($n1,$op,$n2);

}