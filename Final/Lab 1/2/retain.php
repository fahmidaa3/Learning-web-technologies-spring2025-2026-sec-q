<!DOCTYPE html>
<html>
<head>
    <title>Retain Value</title>
</head>
<body>

<h2>Email Form</h2>

<?php
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
}
?>

<form method="post">
    EMAIL:<br>
    <input type="text" name="email" value="<?php echo $email; ?>" required>
    <br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($email != "") {
    $length = strlen($email);

    echo "<h3>Output:</h3>";
    echo "Email: " . $email . "<br>";
    echo "Length: " . $length;
}
?>

</body>
</html>