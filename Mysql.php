<?php
echo "connection of php to my Sql Database <br>";
echo "<br>";
$servername = "localhost";
$username = "root";
$password = "";

$conn  = mysqli_connect($servername, $username, $password);
echo "<br>";
if(!$conn){
    die("soory! Failed to connect Try Again". mysqli_connect_error());
}
else{
    echo "connection was sucessfull";
}

$sql = "CREATE DATABASE Aman23";

$result = mysqli_query($conn, $sql);

if($result){
    echo "db created sucessfully<br>";
}
else{
    echo "db is not created sucessfully! check the error and try again ". mysqli_error($conn);
}


?>