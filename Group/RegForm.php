<?php
$title = "Registration Form";
include 'header.php'?>


<form method="post" action="login(Not used).php">
Username: <input type="text" name="registration_id" required> <br><br>
Fname: <input type="text" name="first_name" required> <br><br>
Lname: <input type="text" name="last_name" required> <br><br>
Email: <input type="email" name="email_id" required> <br><br>
Contact: <input type="number" name="contact_no" >
<input type="submit" value="submit">
</form>

<?php include 'footer.php'?>