<!DOCTYPE html>
<html class="no-js" lang="en">

    <head>

        <!-- Meta -->

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=Edge">
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!-- Title & Icon -->

            <title>Login</title>
            <link rel="icon" href="<?= base_url('assets') ?>/images/logo.svg" type="image/x-icon">
        
        <!-- Links -->

            <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css">
            <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/charts-c3/plugin.css">
            <link rel="stylesheet" href="<?= base_url('assets') ?>/extensions/@fortawesome/fontawesome-free/css/all.min.css">
            <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/morrisjs/morris.min.css">
            <link rel="stylesheet" href="<?= base_url('assets') ?>/css/style.min.css">

    </head>

    <body class="theme-blush">
        
        <div class="authentication">

            <div class="container">

                <div class="row">

                    <div class="col-lg-4 col-sm-12">

                        <form class="card auth_form" action="<?= base_url('/home/aksi_register')?>" method="post">
    
                            <div class="header">

                                <img class="logo" src="<?= base_url('assets') ?>/images/logo.svg" alt="">
                                <h5>Register</h5>

                            </div>

                            <div class="body">

                                <div class="input-group mb-3">

                                    <input type="text" class="form-control" placeholder="Username" name="username" required>

                                    <div class="input-group-append">

                                        <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>

                                    </div>

                                </div>

                                <div class="input-group mb-3">

                                    <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>

                                    <div class="input-group-append">

                                        <span class="input-group-text"><i class="zmdi zmdi-lock"></i></a></span>

                                    </div>

                                </div>

                                <div class="input-group mb-3">

                                    <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" id="confirm_password" required>

                                    <div class="input-group-append">

                                        <span class="input-group-text"><i class="zmdi zmdi-lock"></i></a></span>

                                    </div>

                                </div>

                                    <button type="submit" class="btn btn-primary btn-block waves-effect waves-light" id="login">Confirm</button>

                                <div class="signin_with mt-3"></div>

                            </div>

                        </form>

                        <a href="/home/">
                        
                            <button type="submit" class="btn btn-danger btn-block waves-effect waves-light" id="login">Back</button>
                            
                        </a>
                            
    
                    </div>

                    <div class="col-lg-8 col-sm-12">

                        <div class="card">

                            <img src="<?= base_url('assets') ?>/images/signin.svg" alt="Sign In"/>

                        </div>

                    </div>

                </div>

            </div>
            
        </div>

        <!-- Jquery Core Js -->

            <script src="<?= base_url('assets') ?>/bundles/libscripts.bundle.js"></script>
            <script src="<?= base_url('assets') ?>/bundles/vendorscripts.bundle.js"></script>

        <!-- Custom JS -->

            <script>

                document.addEventListener('DOMContentLoaded', function() {

                    var password = document.getElementById('password');
                    var confirm_password = document.getElementById('confirm_password');

                    function validatePassword() {

                        if (password.value != confirm_password.value) {

                            confirm_password.setCustomValidity('Please make sure its the correct password');

                        } else {

                            confirm_password.setCustomValidity('');

                        }

                    }

                    password.addEventListener('change', validatePassword);
                    confirm_password.addEventListener('keyup', validatePassword);

                });

                $(document).on('click', '#login', function() {

                    var response = grecaptcha.getResponse();

                    if (response.length == 0) {

                        alert('Dimohon untuk melakukan verifikasi captcha.');
                        return false;

                    }

                })

            </script>

    </body>