<?php
session_start();
include_once("dbconnect.php");
include_once("header.php");
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
if(!isset($_SESSION['user_email'])){
    header('location: login.php');
}
if(isset($_POST['submit'])){
    $id = $_GET['update'];
    $confirm = $_POST['confirm'];
    $query = mysqli_query($connection,"UPDATE orders SET status='$confirm' WHERE id='$id'");
    if($query){
        echo "<script>alert('Order Update Successfully')</script>";
		echo "<script>window.open('allorder.php','_self')</script>";
    }
}
?>
<div class="mb-5 pb-5">
    <div class="mx-5 mt-3 text-center mb-5 pb-5">
        <h2 class="btn btn-success bg-gradient m-4 text-center w-50 fw-bold">
            Confirm Order Status
        </h2>
<?php
if(isset($_GET['update'])){
    $id = $_GET['update'];
    $query = mysqli_query($connection,"SELECT * FROM orders WHERE id='$id'");
    if($row = mysqli_fetch_array($query)){
        $id = $row['id'];
    }
}
?>
            <form action="updateorder.php?update=<?php echo $id;?>" method="POST" class="row g-3 p-3 w-75 mx-auto">
            <div class="col-md-12 mb-3">
                    <input type="text" name="confirm" value="confirm" class="form-control" id="inputEmail4" readonly>
                </div>
                <div class="col-12 mb-5 pb-5">
                    <button type="submit" name="submit" class="btn btn-success w-75">Click For Confirm</button>
                </div>
            </form>
    </div>
</div>
<?php
include('footer.php');
?>