<?php

function addUser($user){

   
    if(!isset($_SESSION['users'])){
        $_SESSION['users'] = [];
    }

    $_SESSION['users'][] = $user;
}


function getUsers(){

    if(isset($_SESSION['users'])){
        return $_SESSION['users'];
    }

    return [];
}

?>