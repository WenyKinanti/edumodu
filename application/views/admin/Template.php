			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta http-equiv="X-UA-Compatible" content="IE=edge">

				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1" />
				<meta name="description" content="Neon Admin Panel" />
				<meta name="author" content="" />

				<link rel="icon" href="<?php echo base_url();?>/assets/images/kerjaan.ico">

				<title>Arsip Kajian Proyek Tata Ruang</title>
				

				<link rel="stylesheet" href="<?php echo base_url();?>/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
				<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/font-icons/entypo/css/entypo.css">
				<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
				<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.css">
				<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/neon-core.css">
				<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/neon-theme.css">
				<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/neon-forms.css">
				<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/custom.css">
				<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/skins/purple.css">

				<script src="<?php echo base_url();?>/assets/js/jquery-1.11.3.min.js"></script>
				
						
				<!-- Imported styles on this page -->
				<link rel="stylesheet" href="<?php echo base_url();?>/assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
				<link rel="stylesheet" href="<?php echo base_url();?>/assets/js/rickshaw/rickshaw.min.css">
				<link rel="stylesheet" href="<?php echo base_url();?>/assets/js/datatables/datatables.css">
				<link rel="stylesheet" href="<?php echo base_url();?>/assets/js/select2/select2-bootstrap.css">
				<link rel="stylesheet" href="<?php echo base_url();?>/assets/js/select2/select2.css">
				<link rel="stylesheet" href="<?php echo base_url();?>/assets/js/dropzone/dropzone.css">
				<link rel="stylesheet" href="<?php echo base_url();?>/assets/js/daterangepicker/daterangepicker-bs3.css">
				<link rel="stylesheet" href="<?php echo base_url();?>/assets/js/icheck/skins/minimal/_all.css">
				<link rel="stylesheet" href="<?php echo base_url();?>/assets/js/icheck/skins/square/_all.css">
				<link rel="stylesheet" href="<?php echo base_url();?>/assets/js/icheck/skins/flat/_all.css">
				<link rel="stylesheet" href="<?php echo base_url();?>/assets/js/icheck/skins/futurico/futurico.css">
				<link rel="stylesheet" href="<?php echo base_url();?>/assets/js/icheck/skins/polaris/polaris.css">

				<!-- Bottom scripts (common) -->
				<script src="<?php echo base_url();?>/assets/js/gsap/TweenMax.min.js"></script>
				<script src="<?php echo base_url();?>/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
				<script src="<?php echo base_url();?>/assets/js/bootstrap.js"></script>
				<script src="<?php echo base_url();?>/assets/js/joinable.js"></script>
				<script src="<?php echo base_url();?>/assets/js/resizeable.js"></script>
				<script src="<?php echo base_url();?>/assets/js/neon-api.js"></script>
				<script src="<?php echo base_url();?>/assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>


				<!-- Imported scripts on this page -->
			
				<script src="<?php echo base_url();?>/assets/js/jquery.sparkline.min.js"></script>
				<script src="<?php echo base_url();?>/assets/js/rickshaw/vendor/d3.v3.js"></script>
				<script src="<?php echo base_url();?>/assets/js/rickshaw/rickshaw.min.js"></script>
				<script src="<?php echo base_url();?>/assets/js/raphael-min.js"></script>
				<script src="<?php echo base_url();?>/assets/js/morris.min.js"></script>
				<script src="<?php echo base_url();?>/assets/js/toastr.js"></script>
				<script src="<?php echo base_url();?>/assets/js/neon-chat.js"></script>
				<script src="<?php echo base_url();?>/assets/js/datatables/datatables.js"></script>
				<script src="<?php echo base_url();?>/assets/js/select2/select2.min.js"></script>
				<script src="<?php echo base_url();?>/assets/js/bootstrap-switch.min.js"></script>
				<!--arsip kajian-->
				<script src="<?php echo base_url();?>/http://localhost/ci_energeek//assets/js/jquery.validate.min.js"></script>
				<script src="<?php echo base_url();?>/assets/js/fileinput.js"></script>
				<script src="<?php echo base_url();?>/assets/js/dropzone/dropzone.js"></script>
				<!--form tambah arsip-->
				<script src="<?php echo base_url();?>/assets/js/bootstrap-tagsinput.min.js"></script>
				<script src="<?php echo base_url();?>/assets/js/typeahead.min.js"></script>
				<script src="<?php echo base_url();?>/assets/js/selectboxit/jquery.selectBoxIt.min.js"></script>
				<script src="<?php echo base_url();?>/assets/js/bootstrap-datepicker.js"></script>
				<script src="<?php echo base_url();?>/assets/js/bootstrap-timepicker.min.js"></script>
				<script src="<?php echo base_url();?>/assets/js/bootstrap-colorpicker.min.js"></script>
				<script src="<?php echo base_url();?>/assets/js/moment.min.js"></script>
				<script src="<?php echo base_url();?>/assets/js/daterangepicker/daterangepicker.js"></script>
				<script src="<?php echo base_url();?>/assets/js/jquery.multi-select.js"></script>
				<script src="<?php echo base_url();?>/assets/js/icheck/icheck.min.js"></script>
				
				


				<!-- JavaScripts initializations and stuff -->
				<script src="<?php echo base_url();?>/assets/js/neon-custom.js"></script>


				<!-- Demo Settings -->
				<script src="<?php echo base_url();?>/assets/js/neon-demo.js"></script>
				

			</head>
		
	<body class="page-body  page-fade" data-url="http://neon.dev">

		<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
		
			<div class="sidebar-menu"> <!--MENU KIRI-->
			
				<div class="sidebar-menu-inner">
				
					<header class="logo-env"> <!--HEADER DARI MENU KIRI-->

						<!-- logo --> <!--LOGO TULISAN NEON DI MENU KIRI-->
						<div class="logo">
							<a href="index.html">
								<img src="<?php echo base_url();?>/assets/images/kerja-praktek-mini.png" alt="" />
							</a>
						</div>

						<!-- logo collapse icon --> <!--SUPAYA MENU KIRI BISA HIDE AND SHOW-->
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

					</header> <!--TUTUP HEADER MENU KIRI-->
					
					<ul id="main-menu" class="main-menu">	<!--LIST MENU YANG ADA DI MENU KIRI-->
						<!-- add class "multiple-expanded" to allow multiple submenus to open -->
						<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
						
							<li>
								<a href="<?php echo site_url('home');?>">
									<i class="entypo-home"></i>
									<span class="title">Home</span>
								</a>
							</li>
						
					
						<li class="has-sub">
							<a href="<?php echo site_url('c_kajian');?>">
								<i class="entypo-docs"></i>
								<span class="title">Arsip Kajian</span>
							</a>
						</li>
						
						<li class="has-sub">
							<a href="<?php echo site_url('kegiatan');?>">
								<i class="entypo-briefcase"></i>
								<span class="title">Kegiatan</span>
							</a>
						</li>
						
						
						<li class="has-sub">
							<a href="<?php echo site_url('vendor');?>">
								<i class="entypo-users"></i>
								<span class="title">Vendor</span>
							</a>
						</li>

						<li class="has-sub">
							<a href="<?php echo site_url('report');?>">
								<i class="entypo-doc-text"></i>
								<span class="title">Report</span>
							</a>
						</li>
						
						<!--li>
							<a href="<!--?php echo site_url("login/ubah/{$this->session->userdata("id_user")}");?>">
								<i class="entypo-tools"></i>
								<span class="title">Ubah Password</span>
							</a>
						</li-->
						
					
					</ul>	<!--TUTUP LIST MENU DI MENU KIRI-->
					
				</div>
				
			</div><!--Tutup Menu Kiri-->
		
			<div class="main-content"> <!--DIV BUKA MENU KONTEN (SEBELAH KANAN MENU KIRI YANG PUTIH-PUTIH ITU-->
			
				<div class="row">
		
			<!-- Profile Info and Notifications -->
			<div class="col-md-6 col-sm-8 clearfix">
			<!--form class="form" method="GET" action="<!--?php echo site_url("login/save/{$this->session->userdata("nama_user")}");?>"-->
		
				<ul class="user-info pull-left pull-none-xsm">
		
					<!-- Profile Info -->
					<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
					
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?php echo base_url();  ?>/assets/images/foto.png" alt="" class="img-circle" width="44" />
							<?php echo $this->session->userdata("nama_user"); ?>
						</a>
		
			</div>
							
			<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
				<ul class="list-inline links-list pull-right">
		
					<li class="sep"></li>
		
					<li>
						<a href="<?php echo site_url('Login');?>/logout">
							Log Out <i class="entypo-logout right"></i>
						</a>
					</li>

				</ul>
		
			</div>
		
		</div>
				
				<!--CONTENT -->
				<div class="main-content">
					<div class="row bag-log">
						<?php
							echo $content;
						?>
					</div>
				</div>
				<!--End Content-->
				
				<hr />
				
				<!--Message bla bla-->
				<div id="chat" class="fixed" data-current-user="Art Ramadani" data-order-by-status="1" data-max-chat-history="25">
	
		<div class="chat-inner">
	
	
			<h2 class="chat-header">
				<a href="#" class="chat-close"><i class="entypo-cancel"></i></a>
	
				<i class="entypo-users"></i>
				Chat
				<span class="badge badge-success is-hidden">0</span>
			</h2>
	
	
			<div class="chat-group" id="group-1">
				<strong>Favorites</strong>
	
				<a href="#" id="sample-user-123" data-conversation-history="#sample_history"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
				<a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
				<a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
				<a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
				<a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
			</div>
	
	
			<div class="chat-group" id="group-2">
				<strong>Work</strong>
	
				<a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
				<a href="#" data-conversation-history="#sample_history_2"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
				<a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
			</div>
	
	
			<div class="chat-group" id="group-3">
				<strong>Social</strong>
	
				<a href="#"><span class="user-status is-busy"></span> <em>Velma G. Pearson</em></a>
				<a href="#"><span class="user-status is-offline"></span> <em>Margaret R. Dedmon</em></a>
				<a href="#"><span class="user-status is-online"></span> <em>Kathleen M. Canales</em></a>
				<a href="#"><span class="user-status is-offline"></span> <em>Tracy J. Rodriguez</em></a>
			</div>
	
		</div>
	
		<!-- conversation template -->
		<div class="chat-conversation">
	
			<div class="conversation-header">
				<a href="#" class="conversation-close"><i class="entypo-cancel"></i></a>
	
				<span class="user-status"></span>
				<span class="display-name"></span>
				<small></small>
			</div>
	
			<ul class="conversation-body">
			</ul>
	
			<div class="chat-textarea">
				<textarea class="form-control autogrow" placeholder="Type your message"></textarea>
			</div>
	
		</div>
	
	</div>
	
	
	<!-- Chat Histories -->
	<ul class="chat-history" id="sample_history">
		<li>
			<span class="user">Art Ramadani</span>
			<p>Are you here?</p>
			<span class="time">09:00</span>
		</li>
	
		<li class="opponent">
			<span class="user">Catherine J. Watkins</span>
			<p>This message is pre-queued.</p>
			<span class="time">09:25</span>
		</li>
	
		<li class="opponent">
			<span class="user">Catherine J. Watkins</span>
			<p>Whohoo!</p>
			<span class="time">09:26</span>
		</li>
	
		<li class="opponent unread">
			<span class="user">Catherine J. Watkins</span>
			<p>Do you like it?</p>
			<span class="time">09:27</span>
		</li>
	</ul>
	
	
	
	
	<!-- Chat Histories -->
	<ul class="chat-history" id="sample_history_2">
		<li class="opponent unread">
			<span class="user">Daniel A. Pena</span>
			<p>I am going out.</p>
			<span class="time">08:21</span>
		</li>
	
		<li class="opponent unread">
			<span class="user">Daniel A. Pena</span>
			<p>Call me when you see this message.</p>
			<span class="time">08:27</span>
		</li>
	</ul>

	
</div>
				<!--End Message bla bla--> 
				
				<!-- Footer -->
				<footer class="main">
					
					&copy; 2015 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>
				
				</footer>
				
			</div> <!--TUTUP DIV DARI MENU KONTEN YANG PUTIH-PUTIH-->
			
			
			
		</div><!--Tutup div content yang ada di body-->
	
		
	
	</body>
	</html>
		

