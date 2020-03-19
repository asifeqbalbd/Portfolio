            <?php include "inc/header.php" ?>
            <?php include "session.php" ?>

            <!-- ========== Left Sidebar Start ========== -->
            <?php include "inc/saitebar.php" ?>
            <!-- Left Sidebar End -->
            <?php 

                 require_once "../db.php";

                $id = $_GET['id'];
                $select_edit_portfolio = "SELECT * FROM portfolio WHERE id = '$id'";
                $query_edit_portfolio = mysqli_query($db, $select_edit_portfolio);
                $assoc_edit_portfolio = mysqli_fetch_assoc($query_edit_portfolio);
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
                                <h4 class="header-title mb-4 " >Portfolio Edit</h4>
                                <form class="text-center border border-light p-5" action="portfolio-update.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $assoc_edit_portfolio['id']?>">
                                        <!-- Title -->
                                    <div class="form-group row m-b-20">
                                        <div class="col-12">
                                            <label for="title" >Title</label>
                                            <input class="form-control" type="text" name="title" id="title" value="<?= $assoc_edit_portfolio['title']?>" placeholder="Type Your title">
                                        </div>
                                    </div>
                                        <!-- Images -->
                                    <div class="form-group row m-b-20">
                                        <div class="col-12">
                                            <label for="institute" >Pivarice Images</label>
                                            <img height="150px" src="../images/portfolio/<?= $assoc_edit_portfolio['images'] ?>" alt="">
                                        </div>
                                    </div>
                                     <div class="form-group row m-b-20">
                                        <div class="col-12">
                                            <label for="image" >New Images</label>
                                            <input class="form-control" type="file" name="image" id="image" required="" placeholder="Type Your Institute Name">
                                        </div>
                                    </div>
                                        <!-- Description -->
                                    <div class="form-group">
                                        <textarea class="form-control rounded-0"  name="description" id="exampleFormControlTextarea2" rows="3" placeholder="Description"> <?= $assoc_edit_portfolio['description']?></textarea>
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