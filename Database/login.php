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
    include("user.php");

    $username = null;
    $password = null;
    $result = null;

    if(isset($_POST["submit"])){
        $username = filter_input(INPUT_POST,"username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST,"password", FILTER_SANITIZE_SPECIAL_CHARS);
        $hash = password_hash($password, PASSWORD_DEFAULT);

        if(!empty($username) && !empty($password)){
            $sql_query = "SELECT * FROM users WHERE name = {$username}";
            try{
                $result = mysqli_query($connection, $sql_query);
            }catch(mysqli_sql_exception){
                echo "<script>alert('Error')</script>";
            }

            if(mysqli_num_rows($result) > 0){
                $data = mysqli_fetch_assoc($result);
                if($username == $data["name"] && $hash == $data["password"]){
                    header("Location: homepage.php");
                }
                else{
                    echo"Wrong credentials";
                }
            }
            else{
                echo "<script>alert('No data found!!')</script>";
            }
        }
        else{
            echo"<script>alert('Enter username/password')</script>";
        }
    }
?>