            <?php include "inc/header.php" ?>
            <?php include "session.php" ?>

            <!-- ========== Left Sidebar Start ========== -->
            <?php include "inc/saitebar.php" ?>
            <!-- Left Sidebar End -->
            <?php 

                 require_once "../db.php";

                $id = $_GET['id'];
                $select_edit_myself = "SELECT * FROM myself WHERE id = '$id'";
                $query_edit_myself = mysqli_query($db, $select_edit_myself);
                $assoc_edit_myself = mysqli_fetch_assoc($query_edit_myself);
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
                                <h4 class="header-title mb-4 " >Aboutself Edit</h4>
                                <form class="text-center border border-light p-5" action="myself-update.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?= $assoc_edit_myself['id']?>">
                                        <!-- Name -->
                                    <div class="form-group row m-b-20">
                                        <div class="col-12">
                                            <label for="name" >Name</label>
                                            <input class="form-control" type="text" name="name" id="name" value="<?= $assoc_edit_myself['name']?>" placeholder="Type Your Name">
                                        </div>
                                    </div>
                                        <!-- Images -->
                                    <div class="form-group row m-b-20">
                                        <div class="col-12">
                                            <label for="institute" >Pivarice Images</label>
                                            <img height="150px" src="../images/myself/<?= $assoc_edit_myself['images'] ?>" alt="">
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
                                        <textarea class="form-control rounded-0"  name="summary" id="exampleFormControlTextarea2" rows="3" placeholder="Description"> <?= $assoc_edit_myself['summary']?></textarea>
                                    </div>
                                    <!-- Address -->
                                    <div class="form-group row m-b-20">
                                        <div class="col-12">
                                            <label for="address" >Address</label>
                                            <input class="form-control" type="text" name="address" id="address" value="<?= $assoc_edit_myself['address']?>" placeholder="Type Your Address">
                                        </div>
                                    </div>
                                    <!-- Email -->
                                    <div class="form-group row m-b-20">
                                        <div class="col-12">
                                            <label for="email" >Email</label>
                                            <input class="form-control" type="text" name="email" id="email" value="<?= $assoc_edit_myself['email']?>" placeholder="Type Your Email">
                                        </div>
                                    </div>
                                    <!-- Country -->
                                    <div class="form-group row m-b-20">
                                        <div class="col-12">
                                            <label for="country" >Country</label>
                                            <input class="form-control" type="text" name="country" id="country" value="<?= $assoc_edit_myself['country']?>" placeholder="Type Your Country">
                                        </div>
                                    </div>
                                    <!-- Title -->
                                    <div class="form-group row m-b-20">
                                        <div class="col-12">
                                            <label for="title" >Phone</label>
                                            <input class="form-control" type="text" name="phone" id="phone" value="<?= $assoc_edit_myself['phone']?>" placeholder="Type Your phone">
                                        </div>
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