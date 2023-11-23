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
$sql ="SELECT * FROM `game`";
$result = mysqli_query($conn, $sql);

// REcords

$num = mysqli_num_rows($result);
echo $num;

// show
if($num>0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    while( $row = mysqli_fetch_assoc($result)){
        //    echo var_dump($row);
           echo "hello" .$row['gamename'] . "your rank" . $row['rank'];
           echo "<br>";
    }
}

?>