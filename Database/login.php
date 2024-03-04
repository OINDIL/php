<?php 
    include("user.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1 style="text-align: center;">Log In</h1>
    <form action="login.php" method="post" style="display: flex; flex-direction:column;align-items:center;gap:10px;">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <input type="submit" name="submit" value="Log In">
        <label for="signup">Create an account</label>
        <a href="signup.php">Sign Up</a>
    </form>
</body>
</html>

<?php 
    $username = null;
    $password = null;


    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $hash = password_hash($password, PASSWORD_DEFAULT);

        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            if(password_verify($password,$hash)){
                echo"logged in";
            }
            else{
                echo"Password does not match";
            }
        }
        else{
            echo"<script>alert('Enter username/password')</script>";
        }
    }
?>