<?php
session_start();
if(isset($_SESSION['user_email'])){
    session_destroy();
    header('location:index.php');
}

?>