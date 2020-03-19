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
                                <h4 class="header-title mb-4">Social Media Add Overview</h4>
                                <form action="social-m-post.php" method="post">
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-facebook"></i> </span>
                                        </div>
                                        <input name="facebook" class="form-control" placeholder=" facebook" type="text">
                                    </div>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-twitter"></i> </span>
                                        </div>
                                        <input name="twitter" class="form-control" placeholder="twitter" type="text">
                                    </div>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-instagram"></i> </span>
                                        </div>
                                        <input name="instagram" class="form-control" placeholder="instagram" type="text">
                                    </div>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-github"></i> </span>
                                        </div>
                                        <input class="form-control" name="github" placeholder="github" type="text">
                                    </div>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-pinterest"></i> </span>
                                        </div>
                                        <input class="form-control" name="Pinterest" placeholder="Pinterest" type="text">
                                    </div>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-plus"></i> </span>
                                        </div>
                                        <input class="form-control" name="plus" placeholder="plus" type="text">
                                    </div>
                                    
                                    <div class="form-group">
                                        <button type="submit"  class="btn btn-primary btn-block"> Submit  </button>
                                    </div> <!-- form-group// -->                                                                       
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