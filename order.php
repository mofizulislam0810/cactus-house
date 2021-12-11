<?php
session_start();
include('dbconnect.php');
include('header.php');
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
if(!isset($_SESSION['user_email'])){
  header('location: login.php');
}
if(isset($_POST['submit'])){
  $customer_name = $_POST['customer_name'];
  $customer_email = $_POST['customer_email'];
  $product_name = $_POST['product_name'];
  $price = $_POST['price'];
  $image = $_POST['image'];
  $description = $_POST['description'];
  $status = $_POST['status'];
  $phone = $_POST['phone'];
  $query = mysqli_query($connection,"INSERT INTO orders(customer_name,customer_email,product_name,price,image,description,status,phone) VALUES ('$customer_name','$customer_email','$product_name','$price','$image','$description','$status','$phone')");
  if($query){
    echo "<script>alert('Order Successfully')</script>";
		echo "<script>window.open('myorder.php','_self')</script>";
		exit();
  }
}
?>
<div class="vh-100 form">
  <div class="text-center">
    <h2 class="btn btn-success m-3 w-50 fw-bold ">
        Order Confirmation Page
     </h2>
  </div>
<?php
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $query = mysqli_query($connection, "SELECT * FROM cactuses where id = '$id'");
  if($row = mysqli_fetch_array($query)){
      $id = $row['id'];
      $name = $row['name'];
      $price = $row['price'];
      $description = $row['description'];
      $image = $row['image'];
  }
}
?>
      <form action="order.php?id=<?php echo $id; ?>" method="POST" class="row g-3 p-3 w-75 mx-auto" enctype="multipart/form-data">
        <div class="col-md-12 mb-3">
          <input
            type="text"
            value="<?php echo  $_SESSION['user_name']; ?>"
            class="form-control"
            name="customer_name"
            id="inputEmail4"
            readonly>
        </div>
        <div class="col-md-12 mb-3">
          <input
            type="email"
            value="<?php echo $_SESSION['user_email']; ?>"
            class="form-control"
            name="customer_email"
            id="inputEmail4"
            readonly>
        </div>
        <div class="col-md-12 mb-3">
          <input
            type="text"
            value="<?php echo $name; ?>"
            class="form-control"
            name="product_name"
            id="inputEmail4"
            readonly>
        </div>
        <div class="col-md-12 mb-3">
          <input
            type="number"
            value="<?php echo  $price; ?>"
            class="form-control"
            name="price"
            id="inputDate"
            readonly>
        </div>
        <div class="col-md-12 mb-3">
          <input
            type="text"
            value="<?php echo  $image; ?>"
            class="form-control"
            name="image"
            id="inputDate"
            readonly>
        </div>
        <div class="col-md-12 mb-3">
          <textarea
            type="text"
            class="form-control"
            id="inputDate"
            name="description"
            readonly
          ><?php echo  $description;?></textarea>
        </div>
        <div class="col-12 mb-3">
          <input
            type="text"
            value="pendding"
            class="form-control"
            name="status"
            id="inputAddress2"
            readonly>
        </div>
        <div class="col-12 mb-3">
          <input
            type="number"
            class="form-control"
            id="inputAddress2"
            name="phone"
            placeholder="Please Give Your Phone Number"
            required>
        </div>
        <div class="col-12">
          <button type="submit" name="submit" class="btn btn-outline-success w-100">
            Click For Order
          </button>
        </div>
      </form>
    </div>
<?php
include('footer.php');
?>