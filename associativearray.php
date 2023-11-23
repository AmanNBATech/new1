<?php
// Method 1
$student = array(
    "name" => "John",
    "age" => 20,
    "grade" => "A"
);

// Method 2 (shorter syntax in PHP 5.4 and later)
$student = [
    "name" => "John",
    "age" => 20,
    "grade" => "A"
];
echo $student["name"];
echo "<br>"; 
echo $student["age"] = 22;
echo "<br>";  
echo $student["grade"] = "B"; 
echo "<br>";  
echo $student["city"] = "New york";
echo "<br>";  
unset($student["grade"]); 
echo "<br>";  
foreach ($student as $key => $value) {
    echo "$key: $value\n";
}
echo "<br>";  

if (isset($student["name"])) {
    echo "Name is set.\n";
} else {
    echo "Name is not set.\n";
}



?>