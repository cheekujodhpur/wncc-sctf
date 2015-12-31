<?php
    if(!isset($_SESSION['user']))
    {
?>
<h3>Login</h3>
<form action="auth.php" method="POST">
    <label for="username">Username:</label>
    <input type = "text" name = "username" />
    <br />
    <label for="password">Password:</label>
    <input type = "password" name = "password" />

    <input type = "submit" value = "Log In" />
</form>

<h3>Register</h3>
<form action="register.php" method="POST">
    <label for="username">Username:</label>
    <input type = "text" name = "username" /> &nbsp; (5-15 characters)
    <br />
    <label for="password">Password:</label> &nbsp;  (8-15 characters)
    <input type = "password" name = "password" />
    <br />
    <label for="repassword">Re-enter Password:</label>
    <input type = "password" name = "repassword" />

    <input type = "submit" value = "Register" />
</form>
<?php
    }
?>
