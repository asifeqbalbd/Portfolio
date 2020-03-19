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
												<th>facebook</th>
												<th>twitter</th>
												<th>instagram</th>
												<th>github</th>
												<th>Pinterest</th>
												<th>plus</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody class="text-center">
											<?php
												$select = "SELECT * FROM social_media";
												$query = mysqli_query($db,$select);
												$sl = 1;
												foreach ($query as $key => $value) {
											?>
												<tr class="text-center">
													<td><?= $sl++?></td>
													<td><?= substr($value['facebook'], 0, 15) . " " . "...."?></td>
													<td><?= substr($value['twitter'], 0, 15) . " " . "...."?></td>
													<td><?= substr($value['instagram'], 0, 15) . " " . "...."?></td>
													<td><?= substr($value['github'], 0, 15) . " " . "...."?></td>
													<td><?= substr($value['Pinterest'], 0, 15) . " " . "...."?></td>
													<td><?= substr($value['plus'], 0, 15) . " " . "...."?></td>
													<td>
														<a href="social_media-delete.php?id=<?= $value['id']?>" class="btn btn-outline-danger">Delete</a>
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

