<div class="mx-3 mt-5">
      <h2 class="p-2 bg-success bg-gradient text-white text-center">
        Our Cactuses
      </h2>
      <div class="container my-3 p-3" style= "position: relative">
        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-3 g-3">
<?php
include_once('dbconnect.php');
$query = mysqli_query($connection,"SELECT * FROM cactuses");
while($row = mysqli_fetch_assoc($query)){
  $id = $row['id'];
  $name = $row['name'];
  $price = $row['price'];
  $description = $row['description'];
  $image = $row['image']
?>
    <div class="col">
      <div class="card mx-auto h-100 shadow">
        <img
          src="images/<?php echo $image; ?>"
          class="card-img-top img-fluid mx-auto m-3 shadow"
          style= "width: 350px; height:300px"
          alt="..."
        />
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success w-25">
              Price
            </span>
            <span class="float-end price-hp fw-bold">&#2547; <?php echo $price; ?></span>
          </div>
          <p class="card-title rounded-pill bg-success fw-bold p-1 text-white text-center">
            Cactus Name: <?php echo $name; ?>
          </p>
          <h5 class="card-title text-center"><?php echo substr($description,0,250);?>...</h5>
          <div class="text-center my-4">
            <a
              href="details.php?id=<?php echo $id;?>"
              class="btn btn-outline-success w-50 shadow"
            >
              Order Now
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
        </div>
      </div>

    </div>