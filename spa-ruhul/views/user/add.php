<!-- /*This is user add view
first name ,last name , email , password , regiser .
*/ -->

<form action="process_registration.php" method="post">
    <label for="first_name">First Name:</label> <br />
    <input type="text" id="first_name" name="first_name" required><br>

    <label for="last_name">Last Name:</label><br />
    <input type="text" id="last_name" name="last_name" required><br>

    <label for="email">Email:</label><br />
    <input type="email" id="email" name="email" required><br>

    <label for="password">Password:</label><br />
    <input type="password" id="password" name="password" required><br><br />



    <input type="submit" value="Register">
</form>