<!DOCTYPE html>
<html>
<head>
    <title>Form C</title>
</head>
<body>

<?php
$name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $arr = array($name, "submitted");
    $charCount = strlen($name);

    echo "<h3>You entered: " . $arr[0] . "</h3>";
    echo "Characters: " . $charCount . "<br>";
}
?>

<form method="post">
    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    <input type="submit" value="Submit">
</form>

</body>
</html>