<?php
$a =98;
$b = 89;
echo "The result of a + b is =" . ($a+$b) . "<br>";
echo "The result of a % b is =" . ($a%$b) . "<br>";
echo "The result of a / b is =" . ($a/$b) . "<br>";
echo "The result of a * b is =" . ($a*$b) . "<br>";
echo "The result of a - b is =" . ($a-$b) . "<br>";
// logical
$c = true;
$d = false;

echo "The result is";
echo "<br>";
echo var_dump($c and $d);
echo "The result is";
echo "<br>";
echo var_dump($c or $d);
//
$e = false;
$f = false;

echo "The result is";
echo "<br>";
echo var_dump($e && $f);
echo "The result is";
echo "<br>";
echo var_dump($e || $f);
echo "<br>";
?>

<?php
$a =102;
$b =88;
$c = 97;

if($a>$b && $a>$c)
    {
        echo "<br>";
    echo " A is the greater nummber than both";
    }
elseif($a==$b && $a==$c)
    {
    echo " A and B are equal";
    }
else {
    echo " B is greater than a";
    }
?>