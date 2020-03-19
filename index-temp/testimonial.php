<section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2>happy customer quotes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="testimonial-active">
                                
                                <?php
                                    foreach ($massage_testimonial as $key => $value) {
                                      ?>
                                      <div class="single-testimonial text-center">
                                        <div class="testi-avatar">
                                            <img src="images/testimonial/<?= $value['images']?>" height="50px" alt="img">
                                        </div>
                                        <div class="testi-content">
                                            <h4><span>“</span><?= $value['message'];?><span>”</span></h4>
                                            <div class="testi-avatar-info">
                                                <h1><?= $value['name'];?></h1>
                                                <span>head of idea</span>
                                        </div>
                                    </div>
                                </div>
                                      <?php  
                                    }
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>