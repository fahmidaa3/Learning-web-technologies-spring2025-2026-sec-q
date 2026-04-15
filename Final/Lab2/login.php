<?php
session_start();

$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($_SESSION['users'][$username]) &&
        $_SESSION['users'][$username]['password'] == $password) {

        $_SESSION['user'] = $_SESSION['users'][$username];

        // Remember Me (Cookie)
        if (isset($_POST['remember'])) {
            setcookie("username", $username, time()+3600);
        }

        header("Location: dashboard.php");

    } else {
        $msg = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<table border="1" width="60%" align="center" cellspacing="0" cellpadding="10">

<tr>
<td>
<b style="font-size:20px;">XCompany</b>
<span style="float:right;">
<a href="index.php">Home</a> |
<a href="login.php">Login</a> |
<a href="registration.php">Registration</a>
</span>
</td>
</tr>

<tr>
<td align="center">

<form method="post">
<fieldset style="width:350px;">
<legend><b>LOGIN</b></legend>

<table>

<tr>
<td>User Name</td>
<td>: <input type="text" name="username"></td>
</tr>

<tr><td colspan="2"><hr></td></tr>

<tr>
<td>Password</td>
<td>: <input type="password" name="password"></td>
</tr>

<tr><td colspan="2"><hr></td></tr>

<tr>
<td colspan="2">
<input type="checkbox" name="remember"> Remember Me
</td>
</tr>

<tr><td colspan="2"><hr></td></tr>

<tr>
<td colspan="2">
<input type="submit" value="Submit">
<a href="forgot_password.php">Forgot Password?</a>
</td>
</tr>

<tr>
<td colspan="2" align="center">
<?php echo $msg; ?>
</td>
</tr>

</table>

</fieldset>
</form>

</td>
</tr>

<tr>
<td align="center">
Copyright © 2017
</td>
</tr>

</table>

</body>
</html>