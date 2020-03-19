<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/highdmin/vertical/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2019 06:52:57 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Highdmin - Login</title>
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
        <div class="accountbg"  style="background: url('backend/assets/images/img-3.jpg');background-size: 1500px;background-position: center;"></div>

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

                            <form class="" action="login_post.php" method="post">

                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" type="email" name="email" id="emailaddress" required="" placeholder="Enter your email">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <a href="page-recoverpw.html" class="text-muted float-right"><small>Forgot your password?</small></a>
                                        <label for="password">Password</label>
                                        <input class="form-control" name="passwrd" type="password" required="" id="password" placeholder="Enter your password">
                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Sign In</button>
                                    </div>
                                </div>

                            </form>

                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Don't have an account? <a href="reg.php" class="text-dark m-l-5"><b>Sign Up</b></a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <?php include "backend/inc/footer.php" ?>