<?php

function addProduct($name){

    if(!isset($_SESSION['products'])){
        $_SESSION['products'] = [];
    }

    $_SESSION['products'][] = [
        "name" => $name
    ];
}

function getProducts(){
    return $_SESSION['products'] ?? [];
}

function deleteProduct($id){
    unset($_SESSION['products'][$id]);
}

function updateProduct($id, $name){
    $_SESSION['products'][$id]['name'] = $name;
}
?>