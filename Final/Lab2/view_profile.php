<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Profile</title>
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

<fieldset>
<legend><b>PROFILE</b></legend>

Name : <?php echo $_SESSION['user']['name']; ?><br><br>
Email : <?php echo $_SESSION['user']['email']; ?><br><br>
Gender : <?php echo $_SESSION['user']['gender']; ?><br><br>
Date of Birth : <?php echo $_SESSION['user']['dob']; ?><br><br>

<a href="edit_profile.php">Edit Profile</a>

</fieldset>

</td>

</tr>


<tr>
<td colspan="2" align="center">
Copyright © 2017
</td>
</tr>

</table>

</body>
</html>