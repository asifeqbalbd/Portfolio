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
					<h1 class="header-title mb-6 text-center">Massage Data Overview</h1>
					<table class="table table-bordered" id="Table">
						<thead>
							<tr>
								<th>SL</th>
								<th>Name</th>
								<th>Email</th>
								<th>Message</th>
								<th>Created At</th>
								<?php
								if($_SESSION['user_role']==2){
									?>
									<th>Action</th>
									<?php
								}
								?>
							</tr>
						</thead>
						<tbody class="text-center">
							<?php

							$sl = 1;
							$query = "SELECT * FROM contact";
							$data = mysqli_query($db, $query);
							foreach($data as $index=>$value){
								?>
								<tr 

								<?php 
								if($value['status']==1){


									?>
									style="background: #ced4da;"
									<?php 
								}
								?>
								>
								<td><?= $sl++ ?></td>
								<td><?= $value['name'] ?></td>
								<td><?= $value['email'] ?></td>
								<td><?= substr($value['massage'], 0, 55) . " " . "...."?></td>
								<td><?= $value['created_at'] ?></td>
								<td>
									<a class="btn btn-danger" href="
										<?php
											$id =  $value['id'];
											if($value['status']==1){
												echo 'read.php?id='.$id;
											}
											else{
												echo 'unread.php?id='.$id;
											}
										?>
									">
										<?php 
											if ($value['status']==1) {
												echo "Seen";
											}
											else{
												echo "Unseen";
											}
										?>
									</a>
									<?php
										if($_SESSION['user_role'] == 2){						
									?>
											<a href="message-delete.php?id=<?= $value['id']?>" class="btn btn-outline-danger">Delete</a>
									<?php
										}
										else{					
									?>
											<input type="hidden" name="">
									<?php
										}
									?></a>
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

