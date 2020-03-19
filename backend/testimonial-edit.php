            <?php include "inc/header.php" ?>
            <?php include "session.php" ?>

            <!-- ========== Left Sidebar Start ========== -->
            <?php include "inc/saitebar.php" ?>
            <!-- Left Sidebar End -->
            <?php 

                 require_once "../db.php";

                $id = $_GET['id'];
                $select_edit_testimonial = "SELECT * FROM testimonial WHERE id = '$id'";
                $query_edit_testimonial = mysqli_query($db, $select_edit_testimonial);
                $assoc_edit_testimonial = mysqli_fetch_assoc($query_edit_testimonial);
            ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <?php include "inc/content.php" ?>

            <!-- ============================================================== -->
            <!-- End Right content here -->
            
            
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">
                                <h4 class="header-title mb-4 " >Testimonial Edit</h4>
                                <form class="text-center border border-light p-5" action="testimonial-update.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $assoc_edit_testimonial['id']?>">
                                        <!-- Title -->
                                    <div class="form-group row m-b-20">
                                        <div class="col-12">
                                            <label for="name" >Name</label>
                                            <input class="form-control" type="text" name="name" id="name" value="<?= $assoc_edit_testimonial['name']?>" placeholder="Type Your Name">
                                        </div>
                                    </div>
                                        <!-- Images -->
                                    <div class="form-group row m-b-20">
                                        <div class="col-12">
                                            <label for="institute" >Pivarice Images</label>
                                            <img height="150px" src="../images/testimonial/<?= $assoc_edit_testimonial['images'] ?>" alt="">
                                        </div>
                                    </div>
                                     <div class="form-group row m-b-20">
                                        <div class="col-12">
                                            <label for="image" >New Images</label>
                                            <input class="form-control" type="file" name="image" id="image" required="">
                                        </div>
                                    </div>
                                        <!-- Description -->
                                    <div class="form-group">
                                        <label for="institute" >Message</label>
                                        <textarea class="form-control rounded-0"  name="message" id="exampleFormControlTextarea2" rows="3" placeholder="Message"> <?= $assoc_edit_testimonial['message']?></textarea>
                                    </div>
                                        <!-- Send button -->
                                    <button class="btn btn-info btn-block" type="submit">Send</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- container -->
            

<!-- ============================================================== -->


<!-- END wrapper -->



<!-- jQuery  -->
<?php include "inc/footer.php" ?>