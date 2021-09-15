<div class="page-container">
	<!-- MAIN CONTENT-->
	<div class="main-content">
		<div class="section__content section__content--p30">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="map-data m-b-50">
							<h2 class="card-body-title"><?= $title ?></h2>
                            <?= form_error('menu', '<div class="alert alert-danger" role="alert">',' </div>'); ?>
                            <?= $this->session->flashdata('message'); ?>
							<a href="#" class="btn btn-sm btn-dark mb-3" style="float:right" data-toggle="modal"
								data-target="#exampleModal">Add New Role</a>
							<p class="mg-b-20 mg-sm-b-30"><br></p>
							<div class="table-wrapper">
								<table class="table table-hover">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Role</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $i = 1; ?>
										<?php foreach ($role as $r) : ?>
										<tr>
											<th scope="row"><?= $i ?></th>
											<td><?= $r['role'] ?></td>
											<td>
												<a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="badge badge-warning">Access</a>
												<a href="#" class="badge badge-light">edit</a>
												<a href="#" class="badge badge-dark">delete</a>
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

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Add New Role</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="<?= base_url('admin/role'); ?>" method="post">
						<div class="modal-body">
							<div class="form-group">
								<input type="text" class="form-control" id="role" name="role"
									placeholder="Role name">
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Add</button>
						</div>
					</form>
				</div>
			</div>
		</div>
