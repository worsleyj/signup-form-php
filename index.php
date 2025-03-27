<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Email</label>
        <input type="text" name="email">
        <br>
        <label>Username</label>
        <input type="text" name="username">
        <br>
        <label>Password</label>
        <input type="text" name="password">
        <br>
        <label>Confirm Password</label>
        <input type="text" name="password_confirm">
        <br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>

<?php
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    echo "Email: $email <br>";
    echo "Username: $username <br>";
    echo "Password: $password <br>";
    echo "Confirm Password: $password_confirm <br>";
?>