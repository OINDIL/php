<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Your Landing Page</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

header, section, footer {
    padding: 20px;
    text-align: center;
}

header {
    background-color: #3498db;
    color: #fff;
}

main-content {
    background-color: #ecf0f1;
}

cta {
    background-color: #2ecc71;
    color: #fff;
}

form {
    margin-top: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
}

input {
    padding: 10px;
    margin-right: 10px;
    border: 1px solid #ccc;
}

button {
    padding: 10px;
    background-color: #fff;
    color: #2ecc71;
    border: 1px solid #2ecc71;
    cursor: pointer;
}

footer {
    background-color: #333;
    color: #fff;
    position: fixed;
    bottom: 0;
    width: 100%;
    padding: 10px 0;
}

    </style>
</head>
<body>
    <header>
        <h1>Your Brand</h1>
        <p>Welcome to our website!</p>
    </header>
    <section class="main-content">
        <h2>About Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac urna vel ex blandit rhoncus.</p>
    </section>
    <section class="cta">
        <h2>Join Us Today!</h2>
        <p>Subscribe to our newsletter for the latest updates.</p>
        <form action="#" method="post">
            <input type="email" name="email" placeholder="Enter your email" required>
            <button type="submit">Subscribe</button>
        </form>
    </section>
    <footer>
        <p>&copy; 2024 Your Brand. All rights reserved.</p>
    </footer>
</body>
</html>
