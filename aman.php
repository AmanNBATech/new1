<?php
//data type in PHP
//string
$name = "Aman";
echo "Hii Iam $name<br>";
//integer int
$income = 2000000;
echo "MY income $income<br>";
//boolean
$x = false;
$y = true;
echo var_dump($x);
echo "<br>";
echo var_dump($y);
// array
$employs = array("aman","uday","nitesh","suman");
echo "<br>";
echo var_dump($employs);
//strings
$sent = "Hello i am Here";
echo "<br>";
echo  $sent;
echo "<br>";
echo strlen($sent);
echo "<br>";
echo str_word_count($sent);
echo "<br>";
echo strrev($sent);
echo "<br>";
echo str_replace("Hello","Hii",$sent);
echo "<br>";
echo str_repeat($sent,10);
?>