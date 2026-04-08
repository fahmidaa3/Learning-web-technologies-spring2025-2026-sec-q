<!DOCTYPE html>
<html>
<head>
    <title>Handler Page</title>
</head>
<body>

<h2>Handler Page</h2>

<?php
$email = "";   

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];   
    $length = strlen($email);   

    echo "Your Email is: " . $email . "<br>";
    echo "Length of Email: " . $length;
}
?>

</body>
</html>