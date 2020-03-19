<section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>WHAT WE DO</span>
                                <h2>Services and Solutions</h2>
                            </div>
                        </div>
                    </div>
					<div class="row">
						
						<?php
							$selset = "SELECT * FROM service";
							$service_query = mysqli_query($db, $selset);

							foreach ($service_query as $key => $value) {
						?>
								<div class="col-lg-4 col-md-6">
								<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
	                                <i class="<?= $value['icon']?>"></i>
									<h3><?= $value['title']?></h3>
									<p>
										<?= $value['summary']?>
									</p>
								</div>
						</div>
						<?php
							}
						?>
					</div>
				</div>
			</section>