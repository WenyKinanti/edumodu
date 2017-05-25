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
			<h2>Data Siswa Pendaftar</h2>
			<br>
			<script type="text/javascript">
			jQuery( document ).ready( function( $ ) {
				var $table1 = jQuery( '#table-1' );
				
				// Initialize DataTable
				$table1.DataTable( {
					"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
					"bStateSave": true
				});
				
				// Initalize Select Dropdown after DataTables is created
				$table1.closest( '.dataTables_wrapper' ).find( 'select' ).select2( {
					minimumResultsForSearch: -1
				});
			} );
			</script>
			<br>
			<form role="form" class="form-horizontal form-groups-bordered" method="post" action="<?php echo site_url('D_Peserta/carisiswa')?>">
				<div class="form-group">
				<label for="field-ta" class="col-sm-2 control-label">Search Peserta</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="cari_peserta" id="field-1" placeholder="Cari Nama Peserta">
				</div>
				
					<button type="submit" class="btn btn-primary" name="submit">
						<i class="entypo-search"></i>
					</button>
				</div>
			</form>
			<br>
			<table class="table table-bordered datatable" id="table-1">
				<thead>
					<tr>
						<th>Nama Peserta</th>
						<th>Sekolah Peserta</th>
						<th>Kelas Peserta</th>
						<th>Alamat Peserta</th>
						<th>Kontak Peserta</th>
						<th>Email Peserta</th>
						<th>Orangtua Peserta</th>
						<th>Alamat Orangtua</th>
						<th>Kontak Orangtua</th>
						<th>Program</th>
						<th>Pembayaran</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($pesertas as $peserta){ ?>
						<tr class="odd gradeX">
							
							<td><?php echo $peserta['nama_siswa']; ?></td>
							<td><?php echo $peserta['sekolah_siswa']; ?></td>
							<td><?php echo $peserta['kelas_siswa']; ?></td>
							<td><?php echo $peserta['alamat_siswa']; ?></td>
							<td><?php echo $peserta['kontak_siswa']; ?></td>
							<td><?php echo $peserta['email_siswa']; ?></td>
							<td><?php echo $peserta['ortu_siswa']; ?></td>
							<td><?php echo $peserta['alamat_ortu']; ?></td>
							<td><?php echo $peserta['kontak_ortu']; ?></td>
							<td><?php echo $peserta['nama_program']; ?></td>
							<td><?php echo $peserta['upload']; ?></td>
							<td>
								<a href="<?php echo site_url('D_Peserta/viewemail')?>">
									<button type="button" class="btn btn-success" alt="Edit">
										<i class="entypo-mail"></i>
									</button>
								</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
				<tfoot>
					<tr>
						<th>Nama Peserta</th>
						<th>Sekolah Peserta</th>
						<th>Kelas Peserta</th>
						<th>Alamat Peserta</th>
						<th>Kontak Peserta</th>
						<th>Email Peserta</th>
						<th>Orangtua Peserta</th>
						<th>Alamat Orangtua</th>
						<th>Kontak Orangtua</th>
						<th>Program</th>
						<th>Pembayaran</th>
						<th>Action</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</body>
</html>