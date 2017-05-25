<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Squadfree - Free bootstrap 3 one page template</title>
	
    <!-- Bootstrap Core CSS --> <!--penataan layoutnya-->
	<link rel="stylesheet" href=<?php echo base_url()."assets/admin/css/bootstrap.css"?>>
    <link href=<?php echo base_url()."assets/css/bootstrap.min.css"?> rel="stylesheet" type="text/css">
	
	<!--Dari admin neon-->
	<link rel="stylesheet" href=<?php echo base_url()."assets/admin/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"?>>
	<!--buat tombol setting di header-->
	<!--link rel="stylesheet" href=<!?php echo base_url()."assets/admin/css/font-icons/entypo/css/entypo.css"?>-->
	
	<!--Kalo ilang warna header formnya jadi biru nya squad-->
	<!--link rel="stylesheet" href=<!?php echo base_url()."assets/admin/css/neon-core.css"?>-->
	
	<!--Kalo ilang button uploadku ilang-->
	<link rel="stylesheet" href=<?php echo base_url()."assets/admin/css/neon-theme.css"?>>
	<link rel="stylesheet" href=<?php echo base_url()."assets/admin/css/neon-forms.css"?>>
	
	
	<script src=<?php echo base_url()."assets/admin/js/fileinput.js"?>></script>
	
	
	<!-- Imported scripts on this page addprogram-->
	<script src=<?php echo base_url()."assets/admin/js/bootstrap-switch.min.js"?>></script>
	

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
				<li class="active"><a href=<?php echo site_url()?>>Home</a></li>
				<li><a href=<?php echo site_url(). "/Home/about" ?>>Tentang EM</a></li>
				<li><a href=<?php echo site_url(). "/Home/program" ?>>Program</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Daftar <b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="#">Tentor</a></li>
					<li><a href="#">Peserta</a></li>
				  </ul>
				</li>
				<li><a href=<?php echo site_url(). "/Home/kontak" ?>>Kontak</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
					<ul class="dropdown-menu">
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
	
	<!-- Section: services -->
	<section id="service" class="home-section text-center bg-gray">
		<div class="heading-about">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="wow bounceInDown" data-wow-delay="0.4s">
							<div class="section-heading">
							<h2>Pendaftaran Peserta</h2>
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
			<div class="col-md-12">
			<div class="panel panel-primary" data-collapsed="0">
			<div class="panel-heading">
							<div class="panel-title">
								Form Pendaftaran Siswa Edu Modu
							</div>
						
							<div class="panel-options">
								<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
								<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
								<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
								<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
							</div>
						</div>
				<div class="panel-body">
							<form role="form" enctype="multipart/form-data" class="form-horizontal form-groups-bordered" method="post" action="<?php echo site_url('D_Peserta'); ?>/addpeserta">
								<div class="form-group">
									<label for="field-1" class="col-sm-3 control-label">Nama Peserta</label>
								
									<div class="col-sm-5">
										<input type="text" class="form-control" name="nama_peserta" id="field-1" placeholder="Nama Peserta">
									</div>
								</div>
								
								<div class="form-group">
									<label for="field-1" class="col-sm-3 control-label">Sekolah Peserta</label>
								
									<div class="col-sm-5">
										<input type="text" class="form-control" name="sekolah_peserta" id="field-1" placeholder="Sekolah Peserta">
									</div>
								</div>
								<div class="form-group">
									<label for="field-1" class="col-sm-3 control-label">Kelas</label>
								
									<div class="col-sm-5">
										<input type="text" class="form-control" name="kelas_peserta" id="field-1" placeholder="Kelas Peserta">
									</div>
								</div>
								<div class="form-group">
									<label for="field-ta" class="col-sm-3 control-label">Alamat Lengkap</label>
			
									<div class="col-sm-5">
										<textarea class="form-control autogrow" name="alamat_peserta" id="field-ta" placeholder="Alamat Lengkap Peserta"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label for="field-1" class="col-sm-3 control-label">Telp/No.HP Peserta</label>
								
									<div class="col-sm-5">
										<input type="text" class="form-control" name="kontak_peserta" id="field-1" placeholder="Kontak Peserta">
									</div>
								</div>
								<div class="form-group">
									<label for="field-1" class="col-sm-3 control-label">Email Peserta</label>
								
									<div class="col-sm-5">
										<input type="email" class="form-control" name="email_peserta" id="field-1" placeholder="Email Peserta">
									</div>
								</div>
								<div class="form-group">
									<label for="field-1" class="col-sm-3 control-label">Nama Orangtua (Ayah/Ibu)</label>
								
									<div class="col-sm-5">
										<input type="text" class="form-control" name="ortu_peserta" id="field-1" placeholder="Nama Orangtua Peserta">
									</div>
								</div>
								<div class="form-group">
									<label for="field-ta" class="col-sm-3 control-label">Alamat Orangtua</label>
			
									<div class="col-sm-5">
										<textarea class="form-control autogrow" name="alamat_ortu" id="field-ta" placeholder="Alamat Lengkap Orangtua Peserta"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label for="field-1" class="col-sm-3 control-label">Telfon/No.HP Orangtua</label>
								
									<div class="col-sm-5">
										<input type="text" class="form-control" name="kontak_ortu" id="field-1" placeholder="Kontak Orangtua Peserta">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Program Yang Dipilih</label>
									
									<div class="col-sm-5">
										<select class="form-control" name="program_peserta">
											<option>Pilih Program</option>
											<?php foreach($programs as $p) { 
											echo "<option value='".$p['id_program']."'>".$p['nama_program']."</option>";
											} ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Upload Bukti Pembayaran</label>
									
									<div class="col-sm-5">
										
										<input type="file" class="form-control" name="siswafile"/>
										
									</div>
								</div>
						<div class="form-group" align="center">
							<input type="hidden" name="is_submit" value="1" />
							<button type="submit" class="btn btn-success" name="submit" value="simpan">Simpan</button>
						</div>
					</form>
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
						<a href="#about" id="totop" class="btn btn-circle">
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
	
	
	<!--admin-->
	
	
    <!--Custom Theme JavaScript -->
    <script src=<?php echo base_url()."assets/js/custom.js"?>></script>
	<!--no file existing
    <script src=<!?php echo base_url()."assets/contactform/contactform.js"?>></script>
	-->
</body>
</html>