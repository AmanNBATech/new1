<?php
function processmarks($marks){
    $sum = 0;
    foreach ($marks as $value){
       $sum += $value;
       
    }
    return $sum;
}

$aman = [56,76,45,73];
$total = processmarks($aman);
$ave=($total/400)*100;
echo "The total marks of Aman in th class 10th: =$ave";
echo "<br>";
echo "<br>";
$udit = [56,76,89,70];
$tota = processmarks($udit);
$ave1=($tota/400)*100;
echo "The total marks of Udit in th class 10th: =$ave1";
echo "<br>";
echo"<br>";

if ($ave>$ave1){
    echo "you got the first position in the class:= $ave<br>";
    echo "ave1 got the second positions !! try Hard to get the fist positions in the class<br>";
}

else{
    echo "ave1 got the first position:= $ave1<br>";
    echo "ave Try Hard to get the first positions in the class";
}



?>