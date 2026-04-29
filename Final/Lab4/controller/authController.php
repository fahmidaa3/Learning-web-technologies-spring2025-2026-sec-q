<?php
include('../config/session.php');
include('../model/userModel.php');

// REGISTER
if(isset($_POST['register'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type = $_POST['type'];

    addUser($name, $email, $password, $type);

    header("Location: ../view/login.php?msg=registered");
    exit();
}

// LOGIN
if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = findUser($email, $password);

    if($user){
        $_SESSION['current_user'] = $user;
        header("Location: ../view/home.php");
    } else {
        header("Location: ../view/login.php?msg=invalid");
    }

    exit();
}
?>