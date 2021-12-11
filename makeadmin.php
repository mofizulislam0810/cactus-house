<?php
session_start();
include_once("dbconnect.php");
include_once("header.php");
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
if(!isset($_SESSION['user_email'])){
    header('location: login.php');
}
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $user_email = $_SESSION['user_email'];
    $query = mysqli_query($connection,"SELECT * FROM users where email='$user_email'");
    if($row = mysqli_fetch_array($query)){
        $role = $row['role'];
        if($role=='admin'){
            mysqli_query($connection,"UPDATE users SET role='admin' WHERE email='$email'");
            echo "<script>alert('Admin created Successfully')</script>";
		    echo "<script>window.open('index.php','_self')</script>";
        }
        else{
            echo "<script>alert('You have no permission for this.')</script>";
            echo "<script>window.open('makeadmin.php','_self')</script>";
        }
    }
}
?>
<div class="mb-5 pb-5">
    <div class="mx-5 mt-3 text-center mb-5 pb-5">
        <h2 class="btn btn-success bg-gradient m-4 text-center fw-bold">
            Make Admin
        </h2>

            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="row g-3 p-3 w-75 mx-auto">
            <div class="col-md-12 mb-3">
                    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Please enter a email address">
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