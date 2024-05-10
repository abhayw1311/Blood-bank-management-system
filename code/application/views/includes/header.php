<!DOCTYPE html>
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->    
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <title>Blood Bank Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Blood Donation - Activism & Campaign HTML5 Template">
        <meta name="author" content="xenioushk">
        <link rel="shortcut icon" href="images/favicon.png" />
        <link rel="stylesheet" href="<?php echo base_url('/') ?>tools/css/bootstrap.min.css" />
        <link href="<?php echo base_url('/') ?>tools/css/font-awesome.min.css" rel="stylesheet" type="text/css" >
        <link href="<?php echo base_url('/') ?>tools/css/animate.css" rel="stylesheet" type="text/css" >
        <link href="<?php echo base_url('/') ?>tools/css/owl.carousel.css" rel="stylesheet" type="text/css" >
        <link href="<?php echo base_url('/') ?>tools/css/venobox.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="<?php echo base_url('/') ?>tools/css/styles.css" />

    <body> 

        <div id="preloader">
            <span class="margin-bottom"><img src="<?php echo base_url('/') ?>tools/images/loader.gif" alt="" /></span>
        </div>

        <!--  HEADER -->

        <header class="main-header clearfix">

            <div class="top-bar clearfix">

                <div class="container">

                    <div class="row">

                        <div class="col-md-8 col-sm-12">

                            <p>Welcome to blood bank center.</p>

                        </div>

                        <div class="col-md-4col-sm-12">
                            <div class="top-bar-social">
                               
                            </div>   
                        </div> 

                    </div>

                </div> <!--  end .container -->

            </div> <!--  end .top-bar  -->

            <section class="header-wrapper navgiation-wrapper">

                <div class="navbar navbar-default">			
                    <div class="container">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="logo" href="<?php echo base_url('/') ?>"><img alt="" src="<?php echo base_url('/') ?>tools/images/logo.png"></a>
                        </div>

                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="<?php echo base_url('/') ?>" title="Home">Home</a></li>
                                <li><a href="<?php echo base_url('/home/about') ?>" title="About Us">About Us</a></li>
                                <li><a href="<?php echo base_url('/home/contact') ?>">Contact</a></li>
                                <?php if($this->session->userdata('user_session')) { ?>
                                    <li><a href="<?php echo base_url('/admin/logout') ?>">Logout</a></li>
                                <?php } else { ?>
                                    <li><a href="<?php echo base_url('/home/login') ?>">Login</a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>

            </section>


        </header> <!-- end main-header  -->

        <!--  HOME 2 BANNER BLOCK  -->