		

            <?php 
                  
                  require 'db.php';

                  $selset_myself = "SELECT * FROM myself";
                  $myself_query = mysqli_query($db, $selset_myself);
                  $myself_assoc = mysqli_fetch_assoc($myself_query);

                  $selset_media = "SELECT * FROM social_media";
                  $media_query = mysqli_query($db, $selset_media);
                  $media_assoc = mysqli_fetch_assoc($media_query);

                  $selset_massage = "SELECT * FROM contact";
                  $massage_query = mysqli_query($db, $selset_massage);

                  $selset_testimonial = "SELECT * FROM testimonial";
                  $massage_testimonial = mysqli_query($db, $selset_testimonial);



            ?>
            <?php include "index-temp/header.php" ;?>

            <!-- banner-area -->           
			<?php include "index-temp/banner.php" ?>
            <!-- banner-area-end -->

            <!-- about-area-->            
			<?php include "index-temp/about.php" ?>
            <!-- about-area-end -->

            <!-- Services-area -->           
			<?php include "index-temp/services.php" ?>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <?php include "index-temp/portfolios.php" ?>
            <!-- services-area-end -->


            <!-- fact-area -->
            <?php include "index-temp/fact.php" ?>
            <!-- fact-area-end -->

            <!-- testimonial-area -->
            <?php include "index-temp/testimonial.php" ?>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
            <?php include "index-temp/brand.php" ?>
            <!-- brand-area-end -->

            <!-- contact-area -->
            <?php include "index-temp/contact.php" ?>
            <!-- contact-area-end -->

            <!-- footer -->
			<?php include "index-temp/footer.php" ?>
        	<!-- footer-end -->

        