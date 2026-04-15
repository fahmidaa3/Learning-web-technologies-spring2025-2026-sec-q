<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}

$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_POST['current'] == $_SESSION['user']['password']) {

        if ($_POST['new'] == $_POST['confirm']) {
            $_SESSION['user']['password'] = $_POST['new'];
            $msg = "Password Changed!";
        } else {
            $msg = "New password mismatch!";
        }

    } else {
        $msg = "Wrong current password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
</head>
<body>

<table border="1" width="70%" align="center" cellspacing="0" cellpadding="10">

<tr>
<td colspan="2">
<b style="font-size:20px;">XCompany</b>
<span style="float:right;">
Logged in as <?php echo $_SESSION['user']['name']; ?> |
<a href="logout.php">Logout</a>
</span>
</td>
</tr>

<tr>

<td width="25%">
<b>Account</b>
<hr>
<ul>
<li><a href="dashboard.php">Dashboard</a></li>
<li><a href="view_profile.php">View Profile</a></li>
<li><a href="edit_profile.php">Edit Profile</a></li>
<li><a href="change_picture.php">Change Profile Picture</a></li>
<li><a href="change_password.php">Change Password</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</td>

<td>

<form method="post">
<fieldset>
<legend><b>CHANGE PASSWORD</b></legend>

Current Password : <input type="password" name="current"><br><br>
New Password : <input type="password" name="new"><br><br>
Retype New Password : <input type="password" name="confirm"><br><br>

<input type="submit" value="Submit">
<br><br>
<?php echo $msg; ?>

</fieldset>
</form>

</td>

</tr>

<tr>
<td colspan="2" align="center">Copyright © 2017</td>
</tr>

</table>

</body>
</html>