            <?php include "inc/header.php" ?>
            <?php include "session.php";
            require '../db.php';
             ?>

            <!-- ========== Left Sidebar Start ========== -->
            <?php include "inc/saitebar.php" ?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <?php include "inc/content.php" ?>

            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

            <div class="content">
            	<div class="container-fluid">

            		<div class="row">
            			<div class="col-12">
            				<div class="card-box">
            					<h4 class="header-title mb-4">Brand Add Overview</h4>
								<form class="text-center border border-light p-5" action="brand-post.php" method="post" enctype="multipart/form-data">

                                    <!-- Title -->
                                    <input type="text" id="defaultContactFormName" name="name" class="form-control mb-2" placeholder="Company Name">
									<!-- Images -->
                                    <input type="file" name="image" id="defaultContactFormEmail" class="form-control mb-2" placeholder="Images">

                                    <!-- Send button -->
                                    <button class="btn btn-info btn-block" type="submit">Send</button>

                                </form>
            				</div>
            			</div>
            		</div>
            	</div> <!-- container -->
            </div>


            <!-- END wrapper -->



            <!-- jQuery  -->
            <?php include "inc/footer.php" ?>