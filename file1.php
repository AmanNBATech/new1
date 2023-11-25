<?php
// $a = readfile("nui.html");
// // echo "$a";
$fptr = fopen("example.txt", "r");
if (!$fptr){
    die("unable to open this file");
}
$content = fread($fptr, filesize("example.txt"));
echo $content;
fclose($fptr);

?>