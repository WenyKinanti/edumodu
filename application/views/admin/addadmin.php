<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />


	<title>Program View Admin</title>
</head>
<body class="page-body" data-url="http://neon.dev">
	<div class="page-container">
		<div class="main-content">
			<h2>Form Tambah Admin</h2>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-primary" data-collapsed="0">
						<div class="panel-heading">
							<div class="panel-title">
								Admin Edu Modu
							</div>
						
							
						</div>
						<div class="panel-body">
							<form role="form" class="form-horizontal form-groups-bordered" method="post" action="<?php echo site_url('A_Admin'); ?>/save">
							<div class="col-md-3">
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="entypo-user"></i>
									</div>
									
									<input type="text" class="form-control" name="namauser" id="namauser" placeholder="Nama User" autocomplete="off" />
								</div>
								<br>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="entypo-mail"></i>
									</div>
										
									<input type="text" class="form-control" name="email" id="email" placeholder="Email" data-mask="email" autocomplete="off" />
								</div>
								<br>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="entypo-user"></i>
									</div>
									
									<input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" />
								</div>
								<br>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="entypo-key"></i>
									</div>
										
									<input type="password" class="form-control" name="new_pass" id="new_pass" placeholder="Password Baru" data-mask="email" autocomplete="off" />
								</div>
								<br>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="entypo-key"></i>
									</div>
										
									<input type="password" class="form-control" name="cek_pass" id="new_pass" placeholder="Konfirmasi Password" data-mask="email" autocomplete="off" />
								</div>
								<br>
								<div class="form-group" align="center">
									<input type="hidden" name="is_submit" value="1" />
									<button type="submit" class="btn btn-success" name="submit" value="simpan">Simpan</button>
								</div>
							</div>
							<div class="col-md-3">
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>