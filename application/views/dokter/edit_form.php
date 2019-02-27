<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('dokter/dokter') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('dokter/dokter/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $dokter->dokter_id?>" />

							<div class="form-group">
								<label for="noktp">No KTP*</label>
								<input class="form-control <?php echo form_error('noktp') ? 'is-invalid':'' ?>"
								 type="text" name="noktp" placeholder="No KTP" value="<?php echo $dokter->noktp ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('noktp') ?>
								</div>
							</div>

							
							<div class="form-group">
								<label for="poliknik">Poliknik*</label>
								<input class="form-control <?php echo form_error('poliknik') ? 'is-invalid':'' ?>"
								 type="text" name="poliknik" placeholder="Poliknik" value="<?php echo $dokter->poliknik ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('poliknik') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama">Nama*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Nama" value="<?php echo $dokter->nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="pass">Password*</label>
								<input class="form-control <?php echo form_error('pass') ? 'is-invalid':'' ?>"
								 type="text" name="pass" placeholder="Password" value="<?php echo $dokter->pass ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('pass') ?>
								</div>
							</div>

							

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>