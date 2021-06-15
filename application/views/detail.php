<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tugas 7 PBKK - CRUD</title>

	<!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<div id="container">
	<!-- DataTables -->
	<div class="card mb-3">
		<div class="card-header">
			<a href="<?php echo site_url('welcome/addStudent') ?>"><i class="fas fa-plus"></i> Add New</a>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Nama Lengkap</th>
							<th>Jenis Kelamin</th>
							<th>Tempat Lahir</th>
							<th>Tanggal Lahir</th>
							<th>Alamat</th>
							<th>Telepon</th>
							<th colspan="2">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($students as $student): ?>
						<tr>
							<td>
								<?php echo $student->name ?>
							</td>
							<td>
								<?php echo $student->gender ?>
							</td>
							<td>
								<?php echo $student->birthplace ?>
							</td>
							<td>
								<?php echo $student->birthdate ?>
							</td>
							<td>
								<?php echo $student->address ?>
							</td>
							<td>
								<?php echo $student->phone ?>
							</td>
							<td>
								<a href="<?php echo site_url('welcome/editStudent/'.$student->id) ?>">Edit</a>
							</td>
							<td>
								<a href="<?php echo site_url('welcome/deleteStudent/'.$student->id) ?>">Hapus</a>
							</td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
