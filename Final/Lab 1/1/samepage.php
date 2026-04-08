<!DOCTYPE html>
<html>
<head>
    <title>Form B</title>
</head>
<body>

<form method="post">
    Name: <input type="text" name="name">
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];

    $arr = array("Hello", $name);
    
    $wordCount = str_word_count($name);

    echo "<h3>" . $arr[0] . ", " . $arr[1] . "</h3>";
    echo "Word count: " . $wordCount;
}
?>

</body>
</html>