<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['user']['name'] = $_POST['name'];
    $_SESSION['user']['email'] = $_POST['email'];
    $_SESSION['user']['gender'] = $_POST['gender'];
    $_SESSION['user']['dob'] = $_POST['dob'];

    echo "Profile Updated!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
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
<legend><b>EDIT PROFILE</b></legend>

Name : <input type="text" name="name" value="<?php echo $_SESSION['user']['name']; ?>"><br><br>
Email : <input type="text" name="email" value="<?php echo $_SESSION['user']['email']; ?>"><br><br>

Gender :
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Other">Other
<br><br>

Date of Birth :
<input type="text" name="dob" value="<?php echo $_SESSION['user']['dob']; ?>"><br><br>

<input type="submit" value="Submit">

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