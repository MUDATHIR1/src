<?php
//what to do with the data collected in the form
include 'header.php';

$Firstname = $_POST["Firstname"];
$Lastname = $_POST["Lastname"];

echo "Hello: " . $Firstname, $Lastname "<br> You are welcome to my site.";

include 'footer.php';
?>