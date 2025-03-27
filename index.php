<?php
    // sanitizes the input data, preventing cross site scripting. sql injection is covered by the use of PDO in the insert statement
    $email = htmlspecialchars(trim($_POST["email"]));
    $username = htmlspecialchars(trim($_POST["username"]));
    $password = htmlspecialchars(trim($_POST["password"]));
    $password_confirm = htmlspecialchars(trim($_POST["password_confirm"]));

    if(empty($email) || empty($username) || empty($password) || empty($password_confirm)) {
        echo "All fields are required <br>";
        } elseif(strlen($password) < 6) {
            echo "Password must be at least 6 characters long <br>";
        } elseif($password != $password_confirm) {
            echo "Passwords do not match <br>";
        } else {
            echo "Email: $email <br>";
            echo "Username: $username <br>";
            echo "Password: $password <br>";
            echo "Confirm Password: $password_confirm <br>";
        }
?>

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