<?php

// $a = 5 ;
// $b = "5";

// if ($a === $b){
//     print("=== operator");
// }
// if ($a == $b){
//     print("== operator");
// }


// $a = 5.7;
// $b = "5.7";

// if ($a != $b)



$a = -23;
$b = 35;
$c = -11;

if($a>$b){
    if ($b>$c){
        print("a > b > c ");
    }
    else{
        if($a>$c){
            print("a > c > b ");
        }
        else{
            print("c > a > b ");
        }
        
    }
}
else{
    if($b>$c){
        if($a>$c){
            print("b > a > c ");
        }
        else{
            print("b > c > a ");
        }
    }
    else{
        print("c > b > a ");
    }
}





?>