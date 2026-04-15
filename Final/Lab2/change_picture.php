<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}

if ($_FILES) {
    $file = $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], "uploads/".$file);
    $_SESSION['user']['picture'] = $file;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile Picture</title>
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

<td align="center">

<fieldset>
<legend><b>PROFILE PICTURE</b></legend>

<?php
if (isset($_SESSION['user']['picture'])) {
    echo "<img src='uploads/".$_SESSION['user']['picture']."' width='120'><br><br>";
}
?>

<form method="post" enctype="multipart/form-data">
<input type="file" name="file"><br><br>
<input type="submit" value="Submit">
</form>

</fieldset>

</td>

</tr>

<tr>
<td colspan="2" align="center">Copyright © 2017</td>
</tr>

</table>

</body>
</html>