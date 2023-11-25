<?php
// echo "welcome to file handling in php tutorial";

// $fptr = fopen("write1.txt", "w");
// fwrite($fptr,"welcome to php tutorial and i am now praticising the file handling in read and write ");
$fptr = fopen("write1.txt", "a");
fwrite("This is append function using in file handling")

?>