<?php
include('../config/database.php');

function addUser($name, $email, $password, $type){
    global $conn;

    $sql = "INSERT INTO users (name, email, password, type)
            VALUES ('$name', '$email', '$password', '$type')";

    $conn->query($sql);
}

function findUser($email, $password){
    global $conn;

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        return $result->fetch_assoc();
    } else {
        return null;
    }
}
?>