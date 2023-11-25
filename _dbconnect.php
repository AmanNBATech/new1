<?php
echo "connection of php to my Sql Database <br>";
echo "<br>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aman23";

$conn  = mysqli_connect($servername, $username, $password,$dbname);
echo "<br>";
if(!$conn){
    die("soory! Failed to connect Try Again". mysqli_connect_error());
}
else{
    echo "connection was sucessfull";
}
?>