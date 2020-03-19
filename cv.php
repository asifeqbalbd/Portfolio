        <?php 

            require 'db.php';
            
            // require "backend/session.php";

            $selset_myself = "SELECT * FROM myself";
            $myself_query = mysqli_query($db, $selset_myself);
            $myself_assoc = mysqli_fetch_assoc($myself_query);

            $selset_media = "SELECT * FROM social_media";
            $media_query = mysqli_query($db, $selset_media);
            $media_assoc = mysqli_fetch_assoc($media_query);

            $selset_massage = "SELECT * FROM contact";
            $massage_query = mysqli_query($db, $selset_massage);

           

        ?>
        <!-- header-end -->
        <?php include "index-temp/header.php" ;?>
        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="breadcrumb-content text-center">
                                <h2>CV AND RESUME DIFFERENCE</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- portfolio-details-area -->
            <section class="portfolio-details-area pt-120 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="single-blog-list">
                                <div class="blog-list-thumb mb-35">
                                    <img src="images/cv/cv.jpg" alt="img">
                                </div>
                                <div class="blog-list-content blog-details-content portfolio-details-content">
                                    <div class="blog-list-meta">
                                        <ul>
                                            <li class="blog-post-date">
                                                <h3>Share On</h3>
                                            </li>
                                            <li class="blog-post-share">
                                                <a href="<?=$media_assoc['facebook']?>"><i class="fab fa-facebook-f"></i></a>
                                                <a href="<?=$media_assoc['twitter']?>"><i class="fab fa-twitter"></i></a>
                                                <a href="<?=$media_assoc['pinterest']?>"><i class="fab fa-pinterest-p"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="avatar-post mt-70 mb-60">
                                    <ul>
                                        <li>
                                            <div class="post-avatar-img">
                                                <img height="50px" src="images/user/22.jpg" alt="img">
                                            </div>
                                            <div class="post-avatar-content">
                                                <h5>Thomas Herlihy</h5>
                                                <p>Vehicula dolor amet consectetur adipiscing elit. Cras sollicitudin, tellus vitae
                                                    condimem
                                                    egestliberos dolor auctor
                                                    tellus.</p>
                                                <div class="post-avatar-social mt-15">
                                                    <a href="<?=$media_assoc['facebook']?>"><i class="fab fa-facebook-f"></i></a>
                                                    <a href="<?=$media_assoc['twitter']?>"><i class="fab fa-twitter"></i></a>
                                                    <a href="<?=$media_assoc['Pinterest']?>"><i class="fab fa-pinterest-p"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- portfolio-details-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
            <?php include "index-temp/footer.php" ?>
            <!-- footer-end -->