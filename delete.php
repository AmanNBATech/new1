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
$sql ="DELETE FROM `game` WHERE `rank`= 11";
$result = mysqli_query($conn, $sql);

$aff = mysqli_affected_rows($conn);

echo "number of affected rows: $aff <br>";

 if($result){
    echo "Delete sucessfully";
 }
 else{
    $err = mysqli_error($conn);
    echo "rows not deleted sucessfully: $err";
 }
?>