<?php

$driver = 18;

if($driver>=18 && $driver<=65)
{
    echo "You can Drive";
}
elseif($driver<18){
    echo "your age is small";
}
elseif($driver>65){
    echo "you are too old to drive a car";
}

?>