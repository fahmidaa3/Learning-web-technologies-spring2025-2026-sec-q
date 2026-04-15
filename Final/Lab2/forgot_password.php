<?php
session_start();

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];

    foreach ($_SESSION['users'] as $user) {
        if ($user['email'] == $email) {
            $message = "Your Password: " . $user['password'];
        }
    }

    if ($message == "") {
        $message = "Email not found!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
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
<legend><b>FORGOT PASSWORD</b></legend>

Enter Email:
<input type="text" name="email">
<br><br>

<input type="submit" value="Submit">

<br><br>
<?php echo $message; ?>

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