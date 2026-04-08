<!DOCTYPE html>
<html>
<head>
    <title>Handler</title>
</head>
<body>

<h2>Handler Page</h2>

<?php
$email = $_POST["email"];  
$length = strlen($email);   

echo "Email: " . $email . "<br>";
echo "Length: " . $length;
?>

</body>
</html>