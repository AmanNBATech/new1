<?php

require '_dbconnect1.php';

echo "<br>";

echo "I created this database";
echo "<br>";
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