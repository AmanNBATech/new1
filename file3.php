<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $name = $_POST['name'];
    $sname = $_POST['sname'];
    $age = $_POST['age'];



    $file = fopen('file4.txt', 'a');

    if ($file) {
        fwrite($file, $name . ' ' . $sname . ' ' . $age . "\n");
        fclose($file);

        echo "Text has been successfully written to the file.";
    } else {
        echo "Error: Unable to open file 'file4.txt' for writing.";
    }
} else {
    echo "your request is not post";
    exit();
}

?>
