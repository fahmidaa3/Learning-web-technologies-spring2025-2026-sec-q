<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body><?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_POST['password'] != $_POST['confirm']) {
        echo "Password not matched!";
    } else {

        $user = [
            "name" => $_POST['name'],
            "email" => $_POST['email'],
            "username" => $_POST['username'],
            "password" => $_POST['password'],
            "gender" => $_POST['gender'],
            "dob" => $_POST['dd']."/".$_POST['mm']."/".$_POST['yyyy']
        ];

        $_SESSION['users'][$_POST['username']] = $user;

        echo "Registration Successful!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
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
<fieldset style="width:400px;">
<legend><b>REGISTRATION</b></legend>

<table>

<tr>
<td>Name</td>
<td>: <input type="text" name="name"></td>
</tr>

<tr><td colspan="2"><hr></td></tr>

<tr>
<td>Email</td>
<td>: <input type="email" name="email"></td>
</tr>

<tr><td colspan="2"><hr></td></tr>

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
<td>Confirm Password</td>
<td>: <input type="password" name="confirm"></td>
</tr>

<tr><td colspan="2"><hr></td></tr>

<tr>
<td colspan="2">
<fieldset>
<legend>Gender</legend>
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female
<input type="radio" name="gender" value="Other"> Other
</fieldset>
</td>
</tr>

<tr><td colspan="2"><hr></td></tr>
<tr>
<td colspan="2">
<fieldset>
<legend>Date of Birth</legend>

<input type="text" name="dd" size="2"> /
<input type="text" name="mm" size="2"> /
<input type="text" name="yyyy" size="4">
<i>(dd/mm/yyyy)</i>

</fieldset>
</td>
</tr>

<tr><td colspan="2"><hr></td></tr>

<tr>
<td colspan="2" align="left">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
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
<fieldset style="width:400px;">
<legend><b>REGISTRATION</b></legend>

<table>

<tr>
<td>Name</td>
<td>: <input type="text" name="name"></td>
</tr>

<tr><td colspan="2"><hr></td></tr>

<tr>
<td>Email</td>
<td>: <input type="email" name="email"></td>
</tr>

<tr><td colspan="2"><hr></td></tr>

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
<td>Confirm Password</td>
<td>: <input type="password" name="confirm"></td>
</tr>

<tr><td colspan="2"><hr></td></tr>

<tr>
<td colspan="2">
<fieldset>
<legend>Gender</legend>
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female
<input type="radio" name="gender" value="Other"> Other
</fieldset>
</td>
</tr>

<tr><td colspan="2"><hr></td></tr>
<tr>
<td colspan="2">
<fieldset>
<legend>Date of Birth</legend>

<input type="text" name="dd" size="2"> /
<input type="text" name="mm" size="2"> /
<input type="text" name="yyyy" size="4">
<i>(dd/mm/yyyy)</i>

</fieldset>
</td>
</tr>

<tr><td colspan="2"><hr></td></tr>

<tr>
<td colspan="2" align="left">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
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