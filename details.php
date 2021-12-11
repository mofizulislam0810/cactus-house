<?php
session_start();
include('dbconnect.php');
include('header.php');
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
      <div class="container my-5 py-5">
        <div class="row alin-item-center m-5">
          <div class="col-md-5 col-12 ">
            <div class="d-flex justify-content-center">
              <img class="mx-auto img-fluid" src="images/<?php echo $image;?>" alt="..." />
            </div>
          </div>
          <div class="col-md-7 col-12 my-auto shadow p-5 bg-white rounded">
            <div class="p-0">
              <h3 class="fw-bold mb-3">
                <b>Cactus Name: <?php echo $name;?></b>
              </h3>
              <p class="m-3">
                <b>Description:</b> <?php echo $description;?>
              </p>
              <h3 class="fw-bold m-3">Price: &#2547; <?php echo $price;?></h3>
              <a
                class="btn btn-outline-success w-100"
                href="order.php?id=<?php echo $id;?>"
              >
                Order Now
              </a>
            </div>
          </div>
        </div>
      </div>
<?php
include('footer.php');
?>