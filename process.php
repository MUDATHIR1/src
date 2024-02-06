<?php
//what to do with the data collected in the form
include 'header.php';

$Fname = $_POST["Fname"];
$Fname = $_POST["Lname"];

echo "Hello: " . $Fname, $Lname, "<br> You are welcome to my site.";

include 'footer.php';
?>