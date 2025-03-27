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
        <input type="text" name="email" required>
        <br>
        <label>Username</label>
        <input type="text" name="username" required>
        <br>
        <label>Password</label>
        <input type="text" name="password" required>
        <br>
        <label>Confirm Password</label>
        <input type="text" name="password_confirm" required>
        <br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>

<?php
    echo $_POST["email"];
?>