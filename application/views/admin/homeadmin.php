<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href=<?php echo base_url()."assets/img/emicon.ico"?>>

	<title>Edu Modu</title>

	<link rel="stylesheet" href=<?php echo base_url()."assets/admin/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"?>>
	<link rel="stylesheet" href=<?php echo base_url()."assets/admin/css/font-icons/entypo/css/entypo.css"?>>
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href=<?php echo base_url()."assets/admin/css/bootstrap.css"?>>
	<link rel="stylesheet" href=<?php echo base_url()."assets/admin/css/neon-core.css"?>>
	<link rel="stylesheet" href=<?php echo base_url()."assets/admin/css/neon-theme.css"?>>
	<link rel="stylesheet" href=<?php echo base_url()."assets/admin/css/neon-forms.css"?>>
	<link rel="stylesheet" href=<?php echo base_url()."assets/admin/css/custom.css"?>>

	<script src=<?php echo base_url()."assets/admin/js/jquery-1.11.3.min.js"?>></script>
	
	
	<!-- Imported styles on this page -->
	<link rel="stylesheet" href=<?php echo base_url()."assets/admin/js/jvectormap/jquery-jvectormap-1.2.2.css"?>>
	<link rel="stylesheet" href=<?php echo base_url()."assets/admin/js/rickshaw/rickshaw.min.css"?>>
	<!-- Imported styles on this page for table program-->
	<link rel="stylesheet" href=<?php echo base_url()."assets/admin/js/datatables/datatables.css"?>>
	<link rel="stylesheet" href=<?php echo base_url()."assets/admin/js/select2/select2-bootstrap.css"?>>
	<link rel="stylesheet" href=<?php echo base_url()."assets/admin/js/select2/select2.css"?>>
	<!-- Imported styles on this page email -->
	<link rel="stylesheet" href=<?php echo base_url()."assets/admin/js/wysihtml5/bootstrap-wysihtml5.css"?>>
	

	<!-- Bottom scripts (common) -->
	<script src=<?php echo base_url()."assets/admin/js/gsap/TweenMax.min.js"?>></script>
	<script src=<?php echo base_url()."assets/admin/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"?>></script>
	<script src=<?php echo base_url()."assets/admin/js/bootstrap.js"?>></script>
	<script src=<?php echo base_url()."assets/admin/js/joinable.js"?>></script>
	<script src=<?php echo base_url()."assets/admin/js/resizeable.js"?>></script>
	<script src=<?php echo base_url()."assets/admin/js/neon-api.js"?>></script>
	<script src=<?php echo base_url()."assets/admin/js/jvectormap/jquery-jvectormap-1.2.2.min.js"?>></script>
	<!-- Imported scripts on this page addprogram-->
	<script src=<?php echo base_url()."assets/admin/js/bootstrap-switch.min.js"?>></script>
	<!--dari email-->
	<script src=<?php echo base_url()."assets/admin/js/wysihtml5/wysihtml5-0.4.0pre.min.js"?>></script>



	<!-- Imported scripts on this page -->
	<script src=<?php echo base_url()."assets/admin/js/jvectormap/jquery-jvectormap-europe-merc-en.js"?>></script>
	<script src=<?php echo base_url()."assets/admin/js/jquery.sparkline.min.js"?>></script>
	<script src=<?php echo base_url()."assets/admin/js/rickshaw/vendor/d3.v3.js"?>></script>
	<script src=<?php echo base_url()."assets/admin/js/rickshaw/rickshaw.min.js"?>></script>
	<script src=<?php echo base_url()."assets/admin/js/raphael-min.js"?>></script>
	<script src=<?php echo base_url()."assets/admin/js/morris.min.js"?>></script>
	<script src=<?php echo base_url()."assets/admin/js/toastr.js"?>></script>
	<script src=<?php echo base_url()."assets/admin/js/neon-chat.js"?>></script>
	<!-- Imported scripts on this page table-->
	<!--
	<script src=<!?php echo base_url()."assets/admin/js/datatables/datatables.js"?>></script>
	<script src=<!?php echo base_url()."assets/admin/js/select2/select2.min.js"?>></script>
	<script src=<!?php echo base_url()."assets/admin/js/neon-chat.js"?>></script>
	-->
	<!-- Imported scripts on this page email-->
	<script src=<?php echo base_url()."assets/admin/js/wysihtml5/bootstrap-wysihtml5.js"?>></script>
	<script src=<?php echo base_url()."assets/admin/js/neon-chat.js"?>></script>

	<!-- JavaScripts initializations and stuff -->
	<script src=<?php echo base_url()."assets/admin/js/neon-custom.js"?>></script>


	<!-- Demo Settings -->
	<script src=<?php echo base_url()."assets/admin/js/neon-demo.js"?>></script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body  page-fade" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<div class="sidebar-menu">

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">

				<!-- logo -->
				<div class="logo">
					<a href="#">
						<img src=<?php echo base_url()."assets/admin/images/emtextadmin.png"?> width="120" alt="" />
					</a>
				</div>

				<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>

								
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>

			</header>
			
									
			<ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				
				
				<li class="active opened active has-sub">
					<a href="#">
						<i class="entypo-monitor"></i>
						<span class="title">Program</span>
					</a>
					<ul class="visible">
						<li class="active">
							<a href="<?php echo site_url('A_Program');?>">
								<span class="title">View Program</span>
							</a>
						</li>
						<li>
							<a href="<?php echo site_url('A_Program');?>/addprogram">
								<span class="title">Add New</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="has-sub">
					<a href="#">
						<i class="entypo-newspaper"></i>
						<span class="title">Pendaftar</span>
					</a>
					<ul>
						<li>
							<a href="<?php echo site_url('D_Peserta/getsiswa')?>">
								<span class="title">Siswa</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="title">Tentor</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="<?php echo site_url('A_Admin');?>">
						<i class="entypo-monitor"></i>
						<span class="title">Tambah Admin</span>
					</a>
				</li>
				
			</ul>
			
		</div>

	</div>

	<div class="main-content">
				
		<div class="row">
		
			<!-- Profile Info and Notifications -->
			<div class="col-md-6 col-sm-8 clearfix">
				<ul class="user-info pull-left pull-none-xsm">
					<!-- Profile Info -->
					<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src=<?php echo base_url()."assets/admin/images/foto.png"?> alt="" class="img-circle" width="44" />
							<?php echo $_SESSION['nama_user']; ?>
						</a>
					</li>
				</ul>
			</div>
		
		
			<!-- Raw Links -->
			<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
				<ul class="list-inline links-list pull-right">
		
						
					<li class="sep"></li>
		
					<li>
						<a href="<?php echo site_url('Login');?>/out">
							Log Out <i class="entypo-logout right"></i>
						</a>
					</li>
				</ul>
		
			</div>
		
		</div>
		
		<hr />
		
		<!--CONTENT -->
		<div class="main-content">
			<div class="row bag-log">
				<?php
					echo $content;
				?>
			</div>
		</div>
		<!--End Content-->

	</div>
		
</div>
</div>
</body>
</html>