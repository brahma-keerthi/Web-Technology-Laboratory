<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label>Username:</label>
        <input type="text" id="uname" name="uname" required>
        <br><br>
        <label>Password:</label>
        <input type="password" id="pass" name="pass" required>
        <br><br>
        <input type="submit" value="Login">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    /*Initially store some username and password by creating a file login.txt ex: benne,qwe123*/ 
    $file = 'login.txt';
    $users = file($file, FILE_IGNORE_NEW_LINES);

    $loginSuccessful = false;

    foreach ($users as $user) {
        list($storedUsername, $storedPassword) = explode(',', $user);
        if ($username === $storedUsername && $password === $storedPassword) {
            $loginSuccessful = true;
            break;
        }
    }

    if ($loginSuccessful) {
        echo "<h2>Login Successful!</h2>";
        echo "<p>Welcome, $username!</p>";
    } else {
        echo "<h2>Login Failed!</h2>";
        echo "<p>Invalid username or password.</p>";
    }
    }
    ?>

</body>
</html>