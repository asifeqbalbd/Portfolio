<?php
	require "session.php"; 
	require_once "../db.php";

	$id = $_GET['id'];
	$select_edit_reg = "SELECT * FROM dbtable WHERE id = '$id'";
	$query_edit_reg = mysqli_query($db, $select_edit_reg);
	$assoc_edit_reg = mysqli_fetch_assoc($query_edit_reg);

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
						<h4 class="header-title mb-4">Edit Account</h4>
						<div class="card bg-light">
							<article class="card-body mx-auto" style="max-width: 400px;">
								<h4 class="card-title mt-3 text-center">Eidt Account</h4>
								<form action="reg-update.php" method="post" enctype="multipart/form-data">
									<input type="hidden" name="id" value="<?= $assoc_edit_reg['id']?>">
									<div class="form-group input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"> <i class="fa fa-user"></i> </span>
										</div>
										<input name="name" class="form-control" value="<?php echo $assoc_edit_reg['name']?>" placeholder="Full name" type="text">
									</div>
									<div class="form-group input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"> <i class="fad fa-camera"></i> </span>
										</div>
										<img class="center " height="150px" src="../images/user/<?= $assoc_edit_reg['images'] ?>" style = "left: 20px;">
									</div>
									<div class="form-group input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"> <i class="fa fa-camera"></i> </span>
										</div>
										<input name="image" class="form-control" value="" placeholder="" type="file">
									</div>
									<div class="form-group input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
										</div>
										<input name="email" class="form-control" value="<?= $assoc_edit_reg['email'] ?>" placeholder="Email address" type="email">
									</div>
									<div class="form-group input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
										</div>
										<input name="phone" class="form-control" value="<?= $assoc_edit_reg['phone'] ?>" placeholder="Phone number" type="text">
									</div> <!-- form-group// -->
									<div class="form-group input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
										</div>
										<input class="form-control" name="passwrd" value="<?= $assoc_edit_reg['passwrd'] ?>" placeholder="Create password" type="password">
									</div> <!-- form-group// -->
									
									<div class="form-group">
										<button type="submit"  class="btn btn-primary btn-block"> Eidt Account  </button>
									</div> <!-- form-group// -->                                                                       
								</form>
							</article>
						</div>
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
