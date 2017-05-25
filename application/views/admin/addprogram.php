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
			<h2>Form Add Program</h2>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-primary" data-collapsed="0">
						<div class="panel-heading">
							<div class="panel-title">
								Program Edu Modu
							</div>
						
							<div class="panel-options">
								<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
								<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
								<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
								<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
							</div>
						</div>
						<div class="panel-body">
							<form role="form" enctype="multipart/form-data" class="form-horizontal form-groups-bordered" method="post" action="<?php echo site_url('A_Program'); ?>/saveprogram">
								<div class="form-group">
									<label for="field-1" class="col-sm-3 control-label">Nama Program</label>
								
									<div class="col-sm-5">
										<input type="text" class="form-control" name="nama_program" id="field-1" placeholder="Nama Program Edu Modu">
									</div>
								</div>
								<div class="form-group">
									<label for="field-ta" class="col-sm-3 control-label">Deskripsi Program</label>
								
									<div class="col-sm-5">
										<textarea class="form-control autogrow" name="deskripsi_program" id="field-ta" placeholder="Deskripsi Program Edu Modu"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Upload Gambar</label>
								
									<div class="col-sm-5">
										
										<input type="file" class="form-control file2 inline btn btn-primary" multiple="1" data-label="<i class='glyphicon glyphicon-circle-arrow-up'></i> &nbsp;Browse Picture" name="userfile" />
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
	</div>
</body>
</html>