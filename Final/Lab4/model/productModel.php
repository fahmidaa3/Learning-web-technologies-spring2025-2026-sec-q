<?php
include('../config/database.php');

function addProduct($name){
    global $conn;

    $sql = "INSERT INTO products (name) VALUES ('$name')";
    $conn->query($sql);
}

function getProducts(){
    global $conn;

    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    $products = [];

    while($row = $result->fetch_assoc()){
        $products[] = $row;
    }

    return $products;
}

function deleteProduct($id){
    global $conn;

    $sql = "DELETE FROM products WHERE id=$id";
    $conn->query($sql);
}

function updateProduct($id, $name){
    global $conn;

    $sql = "UPDATE products SET name='$name' WHERE id=$id";
    $conn->query($sql);
}
?>