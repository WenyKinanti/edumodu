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
			<h2>Data Program</h2>
			
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
			
			<table class="table table-bordered datatable" id="table-1">
				<thead>
					<tr>
						<th>Nama Program</th>
						<th>Deskripsi Program</th>
						<th>Picture Program</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($programs as $program){ ?>
						<tr class="odd gradeX">
							
							<td><?php echo $program['nama_program']; ?></td>
							
							<td><?php echo $program['deskripsi_program']; ?></td>
							<!--
							<td><!?php echo $program['gambar_program']; ?></td>
							-->
							<td>
								<span class="btn btn-white btn-file">
									<img src="<?php echo base_url("uploads/"). $program['gambar_program'];?>" width='150px' height="200px">
									<br>
									<p><?php echo $program['gambar_program']; ?></p>
								</span>
							</td>
							<td>
								<a href="<?php echo site_url("A_Program/getedit/".$program['id_program']);?>">
									<button type="button" class="btn btn-info" alt="Edit">
										<i class="entypo-pencil"></i>
									</button>
								</a>
								<a href="<?php echo site_url("A_Program/deleteprogram/".$program['id_program']);?>">
									<button type="button" class="btn btn-danger" alt="Hapus">
										<i class="entypo-trash"></i>
									</button>
								</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
				<tfoot>
					<tr>
						<th>Nama Program</th>
						<th>Deskripsi Program</th>
						<th>Picture Program</th>
						<th>Action</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</body>
</html>