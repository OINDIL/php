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
<?php
include("user.php");



$username = null;
$password = null;
if (isset($_POST["submit"])) {
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = filter_input(INPUT_POST,"username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST,"password", FILTER_SANITIZE_SPECIAL_CHARS);
        $hash = password_hash($password, PASSWORD_DEFAULT);


        $sql_query = "INSERT INTO users (name,password) VALUES ('{$username}','{$hash}')";

        try{
            mysqli_query($connection,$sql_query);
            header("Location: homepage.php");
        }catch(Exception $e){
            echo"". $e->getMessage();
        }
        mysqli_close($connection);
    }
    else{
        echo"<script>alert('Enter username/password')</script>";
    }
}

?>