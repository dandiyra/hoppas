<div class="page-container">
	<!-- MAIN CONTENT-->
	<div class="main-content">
		<div class="section__content section__content--p30">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="map-data m-b-50">
							<h2 class="card-body-title">Data User</h2>
							<?php if (validation_errors()) : ?>
							<div class="alert alert-danger" role="alert">
								<?= validation_errors(); ?>
							</div>
							<?php endif ?>
							<?= $this->session->flashdata('message'); ?>
							<a href="<?= base_url('Admin/register'); ?>" class="btn btn-sm btn-dark mb-3"
								style="float:right">Add New User</a>
							<p class="mg-b-20 mg-sm-b-30"><br></p>
							<div class="table-wrapper">
								<table class="table table-hover">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Name</th>
											<th scope="col">Email</th>
											<th scope="col">Telephone</th>
											<th scope="col">Role</th>
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
											<td><?= $u['telephone'] ?></td>
											<?php if ($u['role_id'] == 0) {
                                                $users_role = 'AdminWeb';
                                            } elseif ($u['role_id'] == 1) {
                                                $users_role = 'Staff';
                                            } elseif ($u['role_id'] == 2) {
                                                $users_role = 'Kabag';
                                            } elseif ($u['role_id'] == 3) {
                                                $users_role = 'Direktur';
                                            } ?>
											<td><?= $users_role ?></td>
											<td>
												<a href="<?= base_url('admin/update/' . $u['id'])?>"
													class="badge badge-light"><i class="fa fa-edit"></i></a>
												<a href="<?= base_url('admin/delete/' . $u['id'])?>"
													class="badge badge-dark" id="delete"><i class="fa fa-trash"></i></a>
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
