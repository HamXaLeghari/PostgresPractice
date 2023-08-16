<?php


function factorial($num){

    if ($num === 1){
        return 1;
    }

    return $num * factorial($num-1);

};

//echo factorial(4);


function minimum($num1,$num2, $num3){


    $min = PHP_INT_MAX;

    if ($num1 < $min){
        $min = $num1;
    }

     if ($num2 < $min){
        $min = $num2;
    }

     if ($num3 < $min){
        $min = $num3;
    }

    return $min;

}

//echo minimum(3,2,1);

function reverseString($value){

    $reverse="";
    for ($i = strlen($value)-1; $i >=0 ; $i--) {

        $reverse .= $value[$i];

    }

    return $reverse;
}


echo reverseString("Hello");


