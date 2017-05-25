<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Squadfree - Free bootstrap 3 one page template</title>

    <!-- Bootstrap Core CSS --> <!--penataan layoutnya-->
    <link href=<?php echo base_url()."assets/css/bootstrap.min.css"?> rel="stylesheet" type="text/css">

    <!-- Fonts --> <!-- panah panah bulet kebawah-->
    <link href=<?php echo base_url()."assets/font-awesome/css/font-awesome.min.css"?> rel="stylesheet" type="text/css">
	<link href=<?php echo base_url()."assets/css/animate.css"?> rel="stylesheet" />
	
    <!-- Squad theme CSS --> <!--foto tema home-->
    <link href=<?php echo base_url()."assets/css/style.css"?> rel="stylesheet">
	<link href=<?php echo base_url()."assets/color/default.css"?> rel="stylesheet">
	
	
    
    <!-- =======================================================
        Theme Name: Squadfree
        Theme URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->

</head>
<!--content full-->
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	
	<!-- Preloader -->
	<!--div id="preloader">
	  <div id="load"></div>
	</div-->
	
	<!--navbar menu atas-->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <h1>Edu Modu</h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href=<?php echo site_url()."/Login/home"?>>Home</a></li>
				<li><a href=<?php echo site_url(). "/Login/about" ?>>Tentang EM</a></li>
				<li><a href=<?php echo site_url(). "/Login/program" ?>>Program</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Daftar <b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="#">Tentor</a></li>
					<li><a href="#">Peserta</a></li>
				  </ul>
				</li>
				<li><a href=<?php echo site_url(). "/Login/kontak" ?>>Kontak</a></li>
				<li><a href=<?php echo site_url(). "/Login/out" ?>>Logout</a></li>
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	<!--close navbar-->

<!-- Section: services -->
    <section id="service" class="home-section text-center bg-gray">
		
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Our Services</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="row">
            <div class="col-md-3">
				<div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src=<?php echo base_url()."assets/img/icons/service-icon-1.png"?> alt="" />
					</div>
					<div class="service-desc">
						<h5>Print</h5>
						<p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src=<?php echo base_url()."assets/img/icons/service-icon-2.png"?> alt="" />
					</div>
					<div class="service-desc">
						<h5>Web Design</h5>
						<p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src=<?php echo base_url()."assets/img/icons/service-icon-3.png"?> alt="" />
					</div>
					<div class="service-desc">
						<h5>Photography</h5>
						<p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-md-3">
				<div class="wow fadeInRight" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src=<?php echo base_url()."assets/img/icons/service-icon-4.png"?> alt="" />
					</div>
					<div class="service-desc">
						<h5>Cloud System</h5>
						<p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
					</div>
                </div>
				</div>
            </div>
        </div>		
		</div>
	</section>
	<!-- /Section: services -->
	
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#service" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div>
					</div>
					<p>&copy;SquadFREE. All rights reserved.</p>
                    <div class="credits">
                        <!-- 
                            All the links in the footer should remain intact. 
                            You can delete the links only if you purchased the pro version.
                            Licensing information: https://bootstrapmade.com/license/
                            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Squadfree
                        -->
                        <a href="https://bootstrapmade.com/free-one-page-bootstrap-themes-website-templates/">One Page Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
				</div>
			</div>	
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    <script src=<?php echo base_url()."assets/js/jquery.min.js"?>></script>
    <script src=<?php echo base_url()."assets/js/bootstrap.min.js"?>></script>
    <script src=<?php echo base_url()."assets/js/jquery.easing.min.js"?>></script>	
	<script src=<?php echo base_url()."assets/js/jquery.scrollTo.js"?>></script>
	<script src=<?php echo base_url()."assets/js/wow.min.js"?>></script>
	
    <!--Custom Theme JavaScript -->
    <script src=<?php echo base_url()."assets/js/custom.js"?>></script>
	<!--no file existing
    <script src=<!?php echo base_url()."assets/contactform/contactform.js"?>></script>
	-->
    
</body>
<!--close content -->
</html>
