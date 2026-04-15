<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($_SESSION['users'][$username]) &&
        $_SESSION['users'][$username]['password'] == $password) {

        $_SESSION['user'] = $_SESSION['users'][$username];

        if (isset($_POST['remember'])) {
            setcookie("username", $username, time()+3600);
        }

        header("Location: dashboard.php");
    } else {
        echo "Invalid login!";
    }
}
?>

<form method="post">
Username: <input name="username"><br>
Password: <input type="password" name="password"><br>

<input type="checkbox" name="remember"> Remember Me<br>

<input type="submit">
<a href="forgot_password.php">Forgot Password?</a>
</form>