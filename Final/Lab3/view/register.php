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

    <input type="text" name="name" placeholder="Enter Name" required>

    <input type="email" name="email" placeholder="Enter Email" required>

    <input type="password" name="password" placeholder="Enter Password" required>

    <select name="type">
        <option value="admin">Admin</option>
        <option value="customer">Customer</option>
    </select>

    <button name="register">Register</button>
</form>

<p style="text-align:center;"><a href="login.php">Go to Login</a></p>
</div>

</body>
</html>