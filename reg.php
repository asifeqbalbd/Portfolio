<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="backend/assets/images/favicon.ico">

        <!-- App css -->
        <link href="backend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="backend/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="backend/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="backend/assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="backend/assets/js/modernizr.min.js"></script>

    </head>


    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('backend/assets/images/bg-2.jpg');background-size: cover;background-position: center;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="index.html" class="text-success">
                                    <span><img src="backend/assets/images/logo.png" alt="" height="26"></span>
                                </a>
                            </h2>

                            <form class="form-horizontal" action="reg_aa.php" method="post" enctype="multipart/form-data">

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="username">Full Name</label>
                                        <input class="form-control" type="text" name="name" id="username" required="" placeholder="Type Your Name">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="image">Image</label>
                                        <input class="form-control" type="file" name="image" id="image" required="" placeholder="Selact Your Image">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" type="email" name="email" id="emailaddress" required="" placeholder="john@deo.com">
                                    </div>
                                </div>
                                <p class="text-denger">
									<?php
										if(isset($_SESSION['email'])){
											echo ($_SESSION['email']);
											unset($_SESSION['email']);
										} 
									?>
								</p>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="emailaddress">Phone</label>
                                        <input class="form-control" type="text" name="phone" id="emailaddress" required="" placeholder="Phone Number">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" name="passwrd" required="" id="password" placeholder="Enter your password">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="mailaddress">Confame Password</label>
                                        <input class="form-control" type="password" name="confame_passwrd" id="mailaddress" required="" placeholder="Confame Passwrd">
                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Create Account</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>

            <?php include "backend/inc/footer.php" ?>

            