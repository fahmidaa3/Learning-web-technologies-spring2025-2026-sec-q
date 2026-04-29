<?php include('../config/session.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Login</h2>

<?php
if(isset($_GET['msg'])){
    if($_GET['msg']=='registered') echo "<p>Registered successfully</p>";
    if($_GET['msg']=='invalid') echo "<p style='color:red;'>Invalid Login</p>";
}
?>

<form method="POST" action="../controller/authController.php">

    <input type="email" name="email" placeholder="Enter Email" required>

    <input type="password" name="password" placeholder="Enter Password" required>

    <button name="login">Login</button>

</form>

<p><a href="register.php">Go to Register</a></p>

</div>

</body>
</html>