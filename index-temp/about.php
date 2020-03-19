<section id="about" class="about-area primary-bg pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="assect/img/banner/banner_img2.png" title="me-01" alt="me-01">
                </div>
            </div>
            <div class="col-lg-6 pr-90">
                <div class="section-title mb-25">
                    <span>Introduction</span>
                    <h2>About Me</h2>
                </div>
                <div class="about-content">
                    <p>
                    <?php
                        $p = $myself_assoc['summary'];
                        echo nl2br($p);
                    ?>
                </p>
                <h3>Education:</h3>
            </div>
            <!-- Education Item -->
            <?php
                $select_education = "SELECT * FROM education";
                $education_query = mysqli_query($db, $select_education);
                foreach ($education_query as $key => $value) {
            ?>
                <div class="education">
                    <div class="year"><?= $value['passing_year']?></div>
                    <div class="line"></div>
                    <div class="location">
                        <span><?= $value['course']?> &amp; <?= $value['institute']?></span>
                        <div class="progressWrapper">
                            <div class="progress">
                                <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?= $value['experience']?>%;" aria-valuenow="<?= $value['experience']?>" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>
</section>