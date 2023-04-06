<?php
function sayHello(){
    echo "Hello World!";
}
function plus(int $a, int $b): int
{
    return $a+$b;
}


echo plus(1, 1);


