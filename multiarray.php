
<?php
// Method 1
$students = array(
    array("John", 20, "A"),
    array("Jane", 22, "B"),
    array("Doe", 21, "C")
);

// Method 2 (shorter syntax in PHP 5.4 and later)
$students = [
    ["John", 20, "A"],
    ["Jane", 22, "B"],
    ["Doe", 21, "C"]
];
echo $students[2][1];
echo "<br>";
echo $students[1][0];
echo "<br>";
echo $students[2][2];
echo "<br>";
$newStudent = ["Alice", 19, "B"];
$students[] = $newStudent;
echo $students[3][0];
echo "<br>";
foreach ($students as $student) {
    foreach ($student as $value) {
        echo $value . " ";
    }
    echo "\n";
}



?>
