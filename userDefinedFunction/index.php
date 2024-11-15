<?php
declare(strict_types=1);   //c'est pour verifie le datatype que on avez utilise

function sayHello(string $name){
    return "hello ". $name;     //return il ne jamais returne le message il donne juste la valuer
}

echo sayHello("Merval");

//global and local

