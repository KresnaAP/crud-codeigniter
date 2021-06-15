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
	<?php if ($this->session->flashdata('success')): ?>
	<div class="alert alert-success" role="alert">
		<?php echo $this->session->flashdata('success'); ?>
	</div>
	<?php endif; ?>

	<div class="card mb-3">
		<div class="card-header">
			<a href="<?php echo site_url('welcome/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
		</div>
		<div class="card-body">

			<form action="<?php echo site_url('welcome/editStudent/'.$student->id) ?>" method="post" enctype="multipart/form-data" >
				<input type="hidden" name="id" value="<?php echo $student->id ?>" />

				<div class="form-group">
					<label for="name">Nama Lengkap*</label>
					<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
						type="text" name="name" placeholder="Nama Lengkap" value="<?php echo $student->name ?>" />
					<div class="invalid-feedback">
						<?php echo form_error('name') ?>
					</div>
				</div>

				<div class="form-group">
					<label for="gender">Jenis Kelamin*</label>
					<input class="form-control <?php echo form_error('gender') ? 'is-invalid':'' ?>"
						type="text" name="gender" placeholder="Pria / Wanita" value="<?php echo $student->gender ?>" />
					<div class="invalid-feedback">
						<?php echo form_error('gender') ?>
					</div>
				</div>

				<div class="form-group">
					<label for="birthplace">Tempat Lahir*</label>
					<input class="form-control <?php echo form_error('birthplace') ? 'is-invalid':'' ?>"
						type="text" name="birthplace" placeholder="Kota" value="<?php echo $student->birthplace ?>" />
					<div class="invalid-feedback">
						<?php echo form_error('birthplace') ?>
					</div>
				</div>

				<div class="form-group">
					<label for="birthdate">Tanggal Lahir*</label>
					<input class="form-control <?php echo form_error('birthdate') ? 'is-invalid':'' ?>"
						type="date" name="birthdate" value="<?php echo $student->birthdate ?>" />
					<div class="invalid-feedback">
						<?php echo form_error('birthdate') ?>
					</div>
				</div>

				<div class="form-group">
					<label for="address">Alamat*</label>
					<input class="form-control <?php echo form_error('address') ? 'is-invalid':'' ?>"
						type="text" name="address" placeholder="Alamat" value="<?php echo $student->address ?>" />
					<div class="invalid-feedback">
						<?php echo form_error('address') ?>
					</div>
				</div>

				<div class="form-group">
					<label for="phone">Telepon*</label>
					<input class="form-control <?php echo form_error('phone') ? 'is-invalid':'' ?>"
						type="text" name="phone" placeholder="Nomor Telepon" value="<?php echo $student->phone ?>" />
					<div class="invalid-feedback">
						<?php echo form_error('phone') ?>
					</div>
				</div>

				<input class="btn btn-success" type="submit" name="btn" value="Save" />
			</form>
		</div>

		<div class="card-footer small text-muted">
			* required fields
		</div>
	</div>
</div>

<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
