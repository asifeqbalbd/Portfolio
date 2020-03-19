<div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="#" class="logo">
                            <span>
                                <img src="assets/images/logo.png" alt="" height="22">
                            </span>
                            <i>
                                <img src="assets/images/logo_sm.png" alt="" height="28">
                            </i>
                        </a>
                    </div>

                    <!-- User box -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="../images/user/<?= $_SESSION['images'];?>" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        </div>
                        <h5><a href="#"><?php echo $_SESSION['name'];?></a> </h5>
                        <p class="text-muted">
                            <?php
                                if ($_SESSION['user_role'] == 2) {
                                    echo "Admin";
                                }
                                else{
                                    echo "Users";
                                }
                            ?>
                        </p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <!--<li class="menu-title">Navigation</li>-->

                            <li>
                                <a href="dashbord.php">
                                    <i class="fi-air-play"></i><span class="badge badge-danger badge-pill float-right">7</span> <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fa fa-users"></i> <span> Users </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="reg_view.php">Usres View</a></li>
                                    <li><a href="../reg.php">Add Users</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fa fa-sitemap"></i> <span> Service </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="#">Service View</a></li>
                                    <li><a href="service-add.php">Add Service</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="fa fa-home"></i><span>Home Page Design </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="myself.php">Myself</a></li>
                                    <li><a href="social-media.php">Social Media</a></li>
                                    <li><a href="testimonial.php">TESTIMONIAL</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fa fa-car"></i><span>Home Page View </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="myself-view.php">Myself</a></li>
                                    <li><a href="social-m-view.php">Social Media</a></li>
                                    <li><a href="testimonial-view.php">TESTIMONIAL</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-box"></i><span>Brand</span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="brand-add.php"><i class="fa fa-plus"></i>Add</a></li>
                                    <li><a href="brand-view.php"><i class="fa fa-list"></i>View</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fa fa-tree"></i> <span>  Portfolio </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="portfolio-view.php">portfolio View</a></li>
                                    <li><a href="portfolio-add.php">Add portfolio</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="massage.php">
                                    <i class="fa fi-mail"></i> <span> Message </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-bar-graph-2"></i><span> Education </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="education-add.php" class="fa fa-plus">Add</a></li>
                                    <li><a href="education-view.php" class="fa fa-list">View</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);"><i class="fi-paper"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Tables</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-tablesaw.html">Tablesaw Tables</a></li>
                                    <li><a href="tables-foo.html">Foo Tables</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="../index.php"><i class="fi-paper-stack"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                            </li>
                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>