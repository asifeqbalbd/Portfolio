<?php
require "../db.php";
require "session.php"; 
?>

<?php include "inc/header.php" ?>


<!-- ========== Left Sidebar Start ========== -->
<?php include "inc/saitebar.php" ?>
<!-- Left Sidebar End -->



<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<?php include "inc/content.php" ?>

<div class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
        <div class="card-box">
          <h1 class="header-title mb-6 text-center">View Data Overview</h1>
          <table class="table table-bordered" id="Table">
              <?php
                  $id = $_GET['id'];
                  $select = "SELECT * FROM contact WHERE id = $id";
                  $update = "UPDATE contact SET status = '2' WHERE id = $id";
                  mysqli_query($db, $update);


                  $query = mysqli_query($db, $select);
                  $value = mysqli_fetch_assoc($query);
              ?>
                  <h2 class="text-center"><?php echo $value['name'] ?></h2>  
                  <p style="font-size: 25px; color: #444"><?php echo $value['massage'] ?></p>
                  <br>
                  <p style="font-size: 15px; color: black"><?php echo $value['created_at'] ?></p>
                  <br>
                  <br>
                  <a class="btn btn-primary" href="massage.php">Back to the messages</a>
        </table>
      </div>
    </div>
  </div>
</div> <!-- container -->
</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


<!-- END wrapper -->



<!-- jQuery  -->
<?php include "inc/footer.php" ?>

