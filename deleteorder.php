<?php
session_start();
include_once('dbconnect.php');
if(!isset($_SESSION['user_email'])){
    header('location: login.php');
  }
if(isset($_GET['del'])){
    $id = $_GET['del'];
    $query = mysqli_query($connection,"DELETE FROM orders where id = '$id'");
    if(isset($_SESSION['admin'])){
      if($query){
        echo "<script>alert('Order Has been Deleted')</script>";
        echo "<script>window.open('allorder.php','_self')</script>";
      }
    }
    else{
      if($query){
        echo "<script>alert('Order Has been Deleted')</script>";
        echo "<script>window.open('myorder.php','_self')</script>";
      }
    }
}
?>