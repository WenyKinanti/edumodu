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
	<!--login neon-->
	<link rel="stylesheet" href=<?php echo base_url()."assets/css/font-icons/entypo/css/entypo.css"?>>

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
				<li class="active"><a href=<?php echo site_url()?>>Home</a></li>
				<li><a href=<?php echo site_url(). "/Home/about" ?>>Tentang EM</a></li>
				<li><a href=<?php echo site_url(). "/Home/program" ?>>Program</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Daftar <b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="#">Tentor</a></li>
					<li><a href=<?php echo site_url(). "/Home/siswa" ?>>Peserta</a></li>
				  </ul>
				</li>
				<li><a href=<?php echo site_url(). "/Home/kontak" ?>>Kontak</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href=<?php echo site_url(). "/Home/login" ?>>as User</a></li>
						<li><a href=<?php echo site_url(). "/Home/loginadmin" ?>>as Admin</a></li>
					</ul>
				</li>
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	<!--close navbar-->
	<section id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="wow bounceInDown" data-wow-delay="0.4s">
							<div class="section-heading">
							<h2>Daftar Siswa</h2>
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
				<div class="col-lg-12">
					<div class="boxed-grey">
						<div class="row">
							<div class="col-md-2">
							</div>
							<div class="col-md-8">
								<div class="panel panel-primary">
									<div class="panel-body">
										<form role="form" id="form1" method="post" class="validate" action="<?php echo site_url('datasiswa'); ?>/save">
											<div class="form-group">
												<label class="control-label">Nama Lengkap Siswa</label>
												<input type="text" class="form-control" name="namasiswa" data-validate="Nama Siswa" data-message-required="Harus Diisi !!." placeholder="Nama Siswa" />
											</div>
								
											<div class="form-group">
												<label class="control-label">Asal Sekolah</label>
												<input type="text" class="form-control" name="sekolahsiswa" data-validate="Sekolah Siswa" data-message-required="Harus Diisi !!." placeholder="Asal Sekolah" />
											</div>
								
											<div class="form-group">
												<label class="control-label">Kelas</label>
												<input type="text" class="form-control" name="kelassiswa" data-validate="Kelas Siswa" data-message-required="Harus Diisi !!." placeholder="Kelas 1 - 12" />
											</div>
								
								
											<div class="form-group">
												<label class="control-label">Alamat Siswa</label>
												<input type="text" class="form-control" name="alamatsiswa" data-validate="Alamat Siswa" data-message-required="Harus Diisi !!." placeholder="Alamat Siswa" />
											</div>
											
											<div class="form-group">
												<label class="control-label">Kontak Siswa</label>
												<input type="text" class="form-control" name="kontaksiswa" data-validate="Kontak Siswa" data-message-required="Harus Diisi !!." placeholder="No.Telp/HP Siswa" />
											</div>
											
											<div class="row">
											<hr>
											</div>
											
											<div class="form-group">
												<label class="control-label">Nama Orangtua Siswa</label>
												<input type="text" class="form-control" name="ortusiswa" data-validate="Orang Tua Siswa" data-message-required="Harus Diisi !!." placeholder="Nama Orang Tua" />
											</div>
											
											<div class="form-group">
												<label class="control-label">Alamat Orangtua Siswa</label>
												<input type="text" class="form-control" name="alamatortu" data-validate="Alamat Orang Tua" data-message-required="Harus Diisi !!." placeholder="Alamat Orang Tua" />
											</div>
											
											<div class="form-group">
												<label class="control-label">Kontak Orangtua Siswa</label>
												<input type="text" class="form-control" name="ortusiswa" data-validate="Kontak Siswa" data-message-required="Harus Diisi !!." placeholder="Kontak Orang Tua" />
											</div>
											
											<div class="row">
											<hr>
											</div>
											
											<div class="form-group">
												<label class="control-label">Pilihan Program</label>
												<select class="form-control" name="program">
												</select>
											</div>
											
											<div class="form-group" align="center">
												<label class="control-label">Upload Berkas Pendaftaran</label>
												<input type="file" name="userfile" data-validate="berkas Siswa" data-message-required="Harus Diisi !!."/>
											</div>
											
											<div class="row">
											<hr>
											</div>
											
											<div class="form-group" align="center">
												<button type="submit" class="btn btn-success" name="submit" value="simpan">Submit</button>
												<button type="reset" class="btn">Reset</button>
											</div>
								
										</form>
								
									</div>
								</div>
							</div>
						<div class="col-md-2">
										</div>
										<div class="col-md-12">
											
										</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#contact" id="totop" class="btn btn-circle">
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
    <script src="<?php echo base_url()."assets/js/jquery.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/bootstrap.min.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/jquery.easing.min.js"?>"></script>	
	<script src="<?php echo base_url()."assets/js/jquery.scrollTo.js"?>"></script>
	<script src="<?php echo base_url()."assets/js/wow.min.js"?>"></script>
	
    <!--Custom Theme JavaScript -->
    <script src="<?php echo base_url()."assets/js/custom.js"?>"></script>
	<!--no file existing
    <script src=<!?php echo base_url()."assets/contactform/contactform.js"?>></script>
	-->
    
</body>
<!--close content -->
</html>
