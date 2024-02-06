<?php
$title = "Exercise 3: Variable, String and Operators";
include 'header.php'?>

<h3>3.1 Create a file (ex3.php): Create a file named 
ex3.php in your exercise folder. 
Ensure that it uses the same layout 
as your other pages and that your navigation 
bar includes a link to this exercise.</h3> 

<h3>Form Creation: Create a simple HTML form to 
collect the user’s Firstname and Lastname.
 Use the echo statement to print “Hello [Firstname] [Lastname],
' You are welcome to my site.” inside an h3</h3>

<form method="post" action="process.php">
Fname: <input type="text" name="Fisrtname" required> <br><br>
Lname: <input type="text" name="Lastname" required> <br><br>
<input type="submit" value="submit">
</form>

<?php include 'footer.php'?>
