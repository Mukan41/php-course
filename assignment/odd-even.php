<form action="">
    <input type="text" name="number">
    <button type="submit">submit</button>
</form>

<?php

$num1 = 34.55;
$num1%=2;

if($num1===0){
    print("even number");
}
else{
    print("odd number");
}
print($num1);



echo $_GET['number'];
?>