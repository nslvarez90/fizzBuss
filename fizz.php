<?php
function FizzBuzz($result,$a){
while ($a++ <= 100) {
    $a % 3 == 0 && $a % 5 == 0 ? $result[$a] = 'FizzBuzz' : ($a % 3 == 0 ? $result[$a] = 'Fizz' : ($a % 5 == 0 ? $result[$a] = 'Buzz' : $result[$a] = $a));    
}
return $result;
}
$a = 0;
$result = [];
echo implode('</br>', FizzBuzz($result,$a));