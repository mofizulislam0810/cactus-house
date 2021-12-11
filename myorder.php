<?php
session_start();
include_once('dbconnect.php');
include_once('header.php');
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
if(!isset($_SESSION['user_email'])){
  header('location: login.php');
}
?>
<div class="mx-5 mt-5">
      <h2 class="bg-success bg-gradient shadow mt-2 fw-bold p-2 text-white text-center">
        Your All Orders
      </h2>
      <div
        class="container bg-trasparent my-3 p-3"
        style= "position: relative"
      >
        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-3 g-3">
<?php 
include_once('dbconnect.php');
$email = $_SESSION['user_email'];
$query = mysqli_query($connection,"SELECT * FROM orders where customer_email = '$email'");
while($row = mysqli_fetch_array($query)){
    $id = $row['id'];
    $customer_name = $row['customer_name'];
    $customer_email = $row['customer_email'];
    $product_name = $row['product_name'];
    $price = $row['price'];
    $image = $row['image'];
    $description = $row['description'];
    $status = $row['status'];
    $phone = $row['phone'];
?>
            <div class="col">
              <div class="card h-100 shadow">
                <img
                  src="images/<?php echo $image;?>"
                  class="card-img-top img-fluid mx-auto m-3 shadow"
                  style= "width: 350px; height:300px"
                  alt="..."
                />
                <div class="card-body">
                  <div class="clearfix mb-3">
                    <span class="float-start badge rounded-pill bg-success w-25">
                      <?php echo $status;?>
                    </span>
                    <span class="float-end price-hp fw-bold">
                      Price: &#2547; <?php echo $price;?>
                    </span>
                  </div>
                  <h6 class="card-title rounded-pill bg-success fw-bold p-1 text-white text-center">
                    Cactus Name: <?php echo $product_name;?>
                  </h6>
                  <h6 class="card-title rounded-pill bg-success fw-bold p-1 text-white text-center">
                    Email: <?php echo $customer_email;?>
                  </h6>
                  <h6 class="card-title rounded-pill bg-success fw-bold p-1 text-white text-center">
                    Phone: <?php echo $phone;?>
                  </h6>
                  <h5 class="card-title">
                    <?php echo substr($description,0,250);?>...
                  </h5>
                  <div class="text-center my-4">
                    <a href="deleteorder.php?del=<?php echo $id;?>" class="btn btn-outline-success w-50 shadow">
                      Delete
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>