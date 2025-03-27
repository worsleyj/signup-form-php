<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // trim input values
    $email = trim($_POST["email"]);
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $password_confirm = trim($_POST["password_confirm"]);

    // checks for empty fields, valid email format, username length between 6 and 26, password length above 5 characters, and passwords matching
    if(empty($email) || empty($username) || empty($password) || empty($password_confirm)) {
        echo "All fields are required <br>";
        } elseif(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            echo "Email address is invalid <br>";
        } elseif(strlen($username) < 6 || strlen($username) > 26) {
            echo "Username must be between 6 and 26 characters long <br>";
        } elseif(strlen($password) < 6) {
            echo "Password must be at least 6 characters long <br>";
        } elseif($password != $password_confirm) {
            echo "Passwords do not match <br>";
        } else {
            // hash the password (never store raw passwords)
            $password_hashed = password_hash($password, PASSWORD_DEFAULT);
            
            // sanitize for safe output, preventing cross site scripting. SQL injection would be prevented using prepared statements with PDO (simulated below).
            $email = htmlspecialchars($email);
            $username = htmlspecialchars($username);


            // after sanitization, validation, and hashing, simulate inserting the user into the database (commented out due to lack of database)

            // try {
            //     $pdo = new PDO("mysql:host=localhost;dbname=mydb", "user", "pass");
            //     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //     $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
            //     $stmt->execute([
            //         ':username' => $username,
            //         ':email' => $email,
            //         ':password' => $password_hashed
            //     ]);

            //     echo "Sign up for $username ($email) successful.<br>";
            // } catch (PDOException $e) {
            //     echo "Database error: " . $e->getMessage() . "<br>";
            // }
            echo "Simulated sign up for $username ($email) successful.<br>";
        }
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
    <form action="signup.php" method="post">
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