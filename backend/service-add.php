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
            
            <div class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">
                                <h4 class="header-title mb-4 " >Service Add</h4>
                                <form action="service-post.php" method="post" class="center">
                                    <div class="card" style="width:400px ;left:400px; background: #a43254">
                                      <h1>Service Logo</h1>
                                      <input type="text" name="icon" placeholder="logo font awesome name">
                                      <div class="card-body">
                                        <h1 class="card-title" id="titel">Title*</h1>
                                        <input type="text" placeholder="Type Your Title" name="title">
                                        <h3 class="card-text">Summary*</h3>
                                        <textarea name="summary" placeholder="Some example text." cols="30" rows="10" style="width:350px ;left:395px; height: 50px;"></textarea>
                                        <br><br>
                                        <button class="btn" type="submit">SEND</button>
                                    </div>
                                </div> 
                            </form> 
                        </div>
                    </div>
                </div>
            </div> <!-- container -->
        </div>

        <!-- ============================================================== -->


        <!-- END wrapper -->



        <!-- jQuery  -->
        <?php include "inc/footer.php" ?>