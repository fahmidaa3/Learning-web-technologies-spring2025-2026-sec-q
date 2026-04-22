<?php
include('config/session.php');

unset($_SESSION['current_user']);

header("Location: view/login.php");
exit();
?>