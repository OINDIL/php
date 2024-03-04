<?php
include("user.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>
    <h1 style="text-align: center;">Sign Up</h1>
    <form action="signup.php" method="post" style="display: flex; flex-direction:column;align-items:center;gap:10px;">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <input type="submit" name="submit" value="Sign Up">
        <label for="login">Already a user?</label>
        <a href="login.php">Log In</a>
    </form>
</body>
</html>