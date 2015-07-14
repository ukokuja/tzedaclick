<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Charity - Premium HTML Template</title>
    <link rel="shortcut icon" type="image/x-icon" href="../files/favicon.ico" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic">
    <link rel="stylesheet" href="../css/style.css" />
    <script src="../files/vendor.js"></script>
    <script src="../files/app.js"></script>
</head>
<body>

<div class="wrapper">
    <? include('bar.php')?>
    <? include('header.php')?>


    <?
    if(isset($_GET['section']) && $_GET['section']!='index'){
        if(file_exists($_GET['section'] . ".php")){
            include($_GET['section'] . ".php");
        }else{
            include("page-404.php");
        }
    }else{
        include("welcome.php");
    }
    ?>
        <footer class="footer">
        <div class="footer-body">
            <div class="row">
                <div class="columns large-3 medium-12">
                    <div class="footer-section">
                        <h4 class="footer-section-title">About Charity</h4><!-- /.footer-section-title -->

                        <div class="footer-section-body">
                            <p>Charity vitae diam pulvinar, tempus dia aliquam tellus. Quisque mattis odio eu placerat luctus. Vivamus magna elit, ultrices non lacinia vel, tempor vitae tell Fusce sit amet sem sit amet.</p>
                        </div><!-- /.footer-section-body -->
                    </div><!-- /.footer-section -->
                </div><!-- /.columns large-3 medium-12 -->

                <div class="columns large-3 medium-12">
                    <div class="footer-section">
                        <h4 class="footer-section-title">Quick Links</h4><!-- /.footer-section-title -->

                        <div class="footer-section-body">
                            <ul class="list-links">
                                <li>
                                    <a href="#">Causes</a>
                                </li>

                                <li>
                                    <a href="#">Projects</a>
                                </li>

                                <li>
                                    <a href="#">Gallery</a>
                                </li>

                            </ul><!-- /.list-links -->

                            <ul class="list-links">
                                <li>
                                    <a href="#">Terms Of Use</a>
                                </li>

                                <li>
                                    <a href="#">Legal Desclaimer</a>
                                </li>

                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                            </ul><!-- /.list-links -->
                        </div><!-- /.footer-section-body -->
                    </div><!-- /.footer-section -->
                </div><!-- /.columns large-3 medium-12 -->

                <div class="columns large-3 medium-12">
                    <div class="footer-section">
                        <h4 class="footer-section-title">Newsletter Signup</h4><!-- /.footer-section-title -->

                        <div class="footer-section-body">
                            <p>Select your newsletters, enter your email address, and click "Subscribe"</p>

                            <div class="subscribe">
                                <form action="?" method="post">
                                    <input type="submit" value="Go" class="subscribe-btn">

                                    <div class="subscribe-inner">
                                        <input type="email" id="mail" name="mail" value="" placeholder="Email Address" class="subscribe-field">
                                    </div><!-- /.subscribe-inner -->
                                </form>
                            </div><!-- /.subscribe -->
                        </div><!-- /.footer-section-body -->
                    </div><!-- /.footer-section -->
                </div><!-- /.columns large-3 medium-12 -->

                <div class="columns large-3 medium-12">
                    <div class="footer-section">
                        <h4 class="footer-section-title">Contact Us</h4><!-- /.footer-section-title -->

                        <div class="footer-section-body">
                            <p><b>Address:</b> 51 Sherbrooke W., Montreal, Quebec, Canada</p>

                            <div class="footer-contacts">
                                <p>
									<span>
										<i class="fa fa-phone"></i> Phone:
									</span>

                                    +1 514 000 0000
                                </p>

                                <p>
									<span>
										<i class="fa fa-envelope-o"></i> Email:
									</span>

                                    <a href="#">info@charitytheme.com</a>
                                </p>
                            </div><!-- /.footer-contacts -->
                        </div><!-- /.footer-section-body -->
                    </div><!-- /.footer-section -->
                </div><!-- /.columns large-3 medium-12 -->
            </div><!-- /.row -->
        </div><!-- /.footer-body -->

        <div class="footer-bar">
            <div class="row">
                <div class="columns small-12">
                    <div class="footer-credits">
                        <p>
                            Copyright 2015. All Rights Reserved by Charity Theme. Designed by <a href="https://wplook.com">WPlook Studio</a>
                        </p>
                    </div><!-- /.footer-credits -->

                    <div class="footer-socials">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div><!-- /.footer-socials -->
                </div><!-- /.columns small-12 -->
            </div><!-- /.row -->
        </div><!-- /.footer-bar -->
    </footer><!-- /.footer -->
</div><!-- /.wrapper -->

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/markerwithlabel/src/markerwithlabel.js"></script>
</body>
</html>

