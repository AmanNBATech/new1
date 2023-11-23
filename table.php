<?php
echo "connection of php to my Sql Database <br>";
echo "<br>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aman23";

$conn  = mysqli_connect($servername, $username, $password, $dbname);
echo "<br>";
if(!$conn){
    die("soory! Failed to connect Try Again". mysqli_connect_error());
}
else{
    echo "connection was sucessfull";
}

echo "<br>";

$name ='aman';
$class = 24;


$sql = "INSERT INTO `game` (`gamename`, `rank`) VALUES ('$name', '$class')";
$result = mysqli_query($conn, $sql);

if($result){
    echo "db created sucessfully<br>";
}
else{
    echo "db is not created sucessfully! check the error and try again ". mysqli_error($conn);
}

?>