<?php
include('../config/session.php');
include('../model/productModel.php');

if(!isset($_SESSION['current_user'])){
    header("Location: ../view/login.php");
    exit();
}

$user = $_SESSION['current_user'];

if(isset($_POST['add']) && $user['type'] == 'admin'){
    addProduct($_POST['pname']);
}

if(isset($_GET['delete']) && $user['type'] == 'admin'){
    deleteProduct($_GET['delete']);
}

if(isset($_POST['update']) && $user['type'] == 'customer'){
    updateProduct($_POST['id'], $_POST['newname']);
}

header("Location: ../view/home.php");
exit();
?>