<div class="page-container">
	<!-- MAIN CONTENT-->
	<div class="main-content">
		<div class="section__content section__content--p30">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="map-data m-b-50">
							<h2 class="card-body-title"><?= $title ?></h2>
							<?php if (validation_errors()) : ?>
							<div class="alert alert-danger" role="alert">
								<?= validation_errors(); ?>
							</div>
							<?php endif ?>
							<?= $this->session->flashdata('message'); ?>
							<p class="mg-b-20 mg-sm-b-30"><br></p>
							<div class="table-wrapper">
								<table class="table table-hover">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Name</th>
											<th scope="col">Email</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $i = 1; ?>
										<?php foreach ($user as $u) : ?>
										<tr>
											<th scope="row"><?= $i ?></th>
											<td><?= $u['name'] ?></td>
											<td><?= $u['email'] ?></td>
											<td>
												<a href="#" class="badge badge-dark" data-toggle="modal"
													data-target="#changepass<?= $u['id']; ?>"><i
														class="fas fa-edit"></i></a>
											</td>
										</tr>
										<?php $i++; ?>
										<?php endforeach ?>
									</tbody>
								</table>
							</div><!-- table-wrapper -->
						</div>
						<!--  END TOP CAMPAIGN-->
					</div>
				</div><!-- sl-mainpanel -->
				<!-- </div> -->
			</div>

		</div>
		</body>

		<!-- Modal Add New  -->
		<?php $i = 1; ?>
		<?php foreach ($user as $u) : ; ?>
		<div class="modal fade" id="changepass<?= $u['id']; ?>" tabindex="-1" role="dialog"
			aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="<?= base_url('Admin/changepass'); ?>" method="post">
						<div class="modal-body">
							<div class="form-group">
								<input type="password" class="form-control" id="password1" name="password1"
									placeholder="Password" required minlength="6">
							</div>
							<input type="text" name='email' value="<?= $u['email']; ?>" hidden>
							<div class="form-group">
								<input type="password" class="form-control" id="password2" name="password2"
									placeholder="Repeat Password" required>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Change</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php $i++; ?>
		<?php endforeach; ?>
