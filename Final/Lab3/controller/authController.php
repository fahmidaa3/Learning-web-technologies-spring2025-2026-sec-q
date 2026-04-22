<?php
include('../config/session.php');
include('../model/userModel.php');

if(isset($_POST['register'])){

    $user = [
        "name" => trim($_POST['name']),
        "email" => trim($_POST['email']),
        "password" => trim($_POST['password']),
        "type" => $_POST['type']
    ];

    addUser($user);

    header("Location: ../view/login.php?msg=registered");
    exit();
}


if(isset($_POST['login'])){

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $users = getUsers();

    foreach($users as $u){

        if($u['email'] === $email && $u['password'] === $password){

            $_SESSION['current_user'] = $u;

            header("Location: ../view/home.php");
            exit();
        }
    }

    header("Location: ../view/login.php?msg=invalid");
    exit();
}
?>