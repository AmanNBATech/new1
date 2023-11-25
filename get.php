<?php
$fptr = fopen("file2.txt", "r");
// echo fgets($fptr);
// echo fgets($fptr);
// while($a=fgets($fptr)){
//     echo $a;
// }
// echo "information is displayed";
  
while($a=fgetc($fptr)){
    echo $a;
    if($a=="."){
        break;
    }
}

// echo fgetc($fptr);

?>