<?php
$num = 9;
switch ($num){
    case 1 :
        print("sunday");
        break;
    case 2 :
        print("monday");
        break;
    case 3 :
        print("tuesday");
        break;
    case 4 :
        print("wednesday");
        break;
    case 5 :
        print("thursday");
        break;
    case 6 :
        print("friday");
        break;
    case 7 :
        print("saturdayday");
        break;
    default :
        print("other");
        break;
}

$a = 10;
$b = 25;
$operator = "add" ;
switch ($operator){
    case "add":
        print($a + $b);
        break;
    case "sub":
        print($a - $b);
        break;
    case "multi":
        print($a * $b);
        break;
    case "div":
        print($a / $b);
        break;
    default :
        print("other");
        break;
}


?>