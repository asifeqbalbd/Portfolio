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
										<thead class="text-center">
											<tr class="text-center">
												<th>SL No</th>
												<th>Title</th>
												<th>Image</th>
												<th>Description</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody class="text-center">
											<?php
												$select = "SELECT * FROM portfolio";
												$query = mysqli_query($db,$select);
												$sl = 1;
												foreach ($query as $key => $value) {
											?>
												<tr class="text-center">
													<td><?= $sl++?></td>
													<td><?= $value['title']?></td>
													<td><img height="150px" src="../images/portfolio/<?= $value['images']?>" alt=""></td>
													<td><?= substr($value['description'], 0, 55) . " " . "...."?></td>
													<td>
														<?php
															if($_SESSION['user_role'] == 2){
																
																?>
																	<a href="portfolio-delete.php?id=<?= $value['id']?>" class="btn btn-outline-danger">Delete</a>
																<?php
															}
															else{
																
																?>
																<input type="hidden" name="">
																<?php
															}
														?>
														<a href="portfolio-edit.php?id=<?= $value['id']?>" class="btn btn-outline-success">Edit</a>
														
													</td>
												</tr>
											<?php
												}
											?>
										</tbody>
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

