<?php include('../config/session.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Register</h2>

<form method="POST" action="../controller/authController.php">
<input name="name" placeholder="Enter Name" required>
<input name="email" placeholder="Enter Email" required>
<input type="password" name="password" placeholder="Enter Password" required>

<select name="type">
<option value="admin">Admin</option>
<option value="customer">Customer</option>
</select>

<button name="register">Register</button>
</form>

<p>Already have account? <a href="login.php">Login</a></p>

</div>

</body>
</html>