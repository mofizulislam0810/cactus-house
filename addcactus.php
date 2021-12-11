<?php
session_start();
include_once('dbconnect.php');
include_once('header.php');
$_SESSION['url'] = $_SERVER['REQUEST_URI'];
if(!isset($_SESSION['user_email'])){
  header('location: login.php');
}
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $local_image = "images/";
    move_uploaded_file($image_tmp,$local_image.$image);
    $query = mysqli_query($connection,"INSERT INTO cactuses(name,price,description,image) VALUES ('$name','$price','$description','$image')");
    if($query){
        $success = "Cactuses added successfully!";
        header("location: index.php");
    }
    else{
        $error = "Something is error!!";
    }
}
?>
<div class="mx-5 mt-3 text-center">
      <h2 class="btn btn-success bg-gradient m-4 text-center w-50 fw-bold">
        Add New Cactus In Cactus Section
      </h2>
      <?php if(isset($error)) echo '<div class="my-3"><span class="alert alert-danger w-50" role="alert">'.$error.'</span></div>'?>
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="row g-3 p-3 w-75 mx-auto" enctype="multipart/form-data">
        <div class="col-md-12 mb-3">
          <input
            type="text"
            name="name"
            class="form-control"
            placeholder="Cactus Name"
            required>
        </div>
        <div class="col-md-12 mb-3">
          <input
            type="number"
            name="price"
            class="form-control"
            placeholder="Cactus Price"
            required>
        </div>
        <div class="col-12 mb-3">
          <textarea
            type="text"
            name="description"
            class="form-control"
            placeholder="Cactus Description"
            style="height: 100px"
            required></textarea>
        </div>
        <div class="col-12 mb-3">
          <input
            type="file"
            name="image"
            class="form-control"
            required>
        </div>
        <div class="col-12 mb-5">
          <button type="submit" name="submit" class="btn btn-outline-success w-100">
            Add New Cactus
          </button>
        </div>
      </form>
    </div>
<?php
include_once('footer.php');
?>