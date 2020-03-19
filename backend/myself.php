            <?php include "inc/header.php" ?>
            <?php include "session.php";
                require '../db.php';
            ?>

            <!-- ========== Left Sidebar Start ========== -->
            <?php include "inc/saitebar.php" ?>
            <!-- Left Sidebar End -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <?php include "inc/content.php" ?>
            <!-- ============================================================== -->
            <div class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">
                                <h4 class="header-title mb-4">Home Page Aboutself Overview</h4>
                                <form class="text-center border border-light p-5" action="myself-post.php" method="post" enctype="multipart/form-data">

                                    <!-- Name -->
                                    <input type="text" id="name" name="name" class="form-control mb-4" placeholder="Type Your Full Name">
                                    <!-- Images -->
                                    <input type="file" name="image" id="image" class="form-control mb-4" placeholder="Images">
                                    <!-- Aboutself -->
                                    <div class="form-group">
                                        <textarea class="form-control rounded-0" name="myself" id="myself" rows="3" placeholder="Enter Your Aboutself"></textarea>
                                    </div>
                                    <!-- Address -->
                                    <input type="text" id="address" name="address" class="form-control mb-4" placeholder="Type Your Full Address">
                                    <!-- Country -->
                                    <input type="text" id="country" name="country" class="form-control mb-4" placeholder="Type Your Full Country">
                                    <!-- Phone -->
                                    <input type="text" id="phone" name="phone" class="form-control mb-4" placeholder="Enter Your Phone">
                                    <!-- Email -->
                                    <input type="email" id="email" name="email" class="form-control mb-4" placeholder="Type Your Full Email">
                                    <!-- Send button -->
                                    <button class="btn btn-info btn-block" type="submit">Send</button>

                                </form>
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