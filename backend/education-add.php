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

                  <div class="container-fluid">

                        <div class="row">
                              <div class="col-12">
                                    <div class="card-box">
                                          <h4 class="header-title mb-4">Education Add Overview</h4>
                                          <form class=" border border-light p-5" action="education-post.php" method="post">
                                                 <div class="form-group row m-b-20">
                                                      <div class="col-12">
                                                            <label for="institute" >Institute Name</label>
                                                            <input class="form-control" type="text" name="institute" id="institute" required="" placeholder="Type Your Institute Name">
                                                      </div>
                                                </div>
                                                <div class="form-group row m-b-20">
                                                      <div class="col-12">
                                                            <label for="course" >Course Name</label>
                                                            <input class="form-control" type="text" name="course" id="course" required="" placeholder="Type Your Course Name">
                                                      </div>
                                                </div>
                                                <div class="form-group row m-b-20">
                                                      <div class="col-12">
                                                            <label for="passing_year" >Passing Year</label>
                                                            <input class="form-control" type="text" name="passing_year" id="passing_year" required="" placeholder="Type Your Passing Year">
                                                      </div>
                                                </div>
                                                <div class="form-group row m-b-20">
                                                      <div class="col-12">
                                                            <label for="experience" >Experience</label>
                                                            <input class="form-control" type="text" name="experience" id="experience" required="" placeholder="Type Your Experience">
                                                      </div>
                                                </div>

                                            <button class="btn btn-info btn-block" type="submit">Send</button>

                                      </form>
                                </div>
                          </div>
                    </div>
              </div> <!-- container -->


        <!-- END wrapper -->



        <!-- jQuery  -->
        <?php include "inc/footer.php" ?>