<div class="page-container">
	<!-- MAIN CONTENT-->
	<div class="main-content">
		<div class="section__content section__content--p30">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="map-data m-b-50">
							<h2 class="card-body-title"><?= $title ?></h2>
							<?= $this->session->flashdata('message'); ?>
                            <h5 class="mb-3">Role : <?= $role['role']; ?></h5>
							<p class="mg-b-20 mg-sm-b-30"><br></p>
							<div class="table-wrapper">
								<table class="table table-hover">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Menu</th>
											<th scope="col">Access</th>
										</tr>
									</thead>
									<tbody>
										<?php $i = 1; ?>
										<?php foreach ($menu as $m) : ?>
										<tr>
											<th scope="row"><?= $i ?></th>
											<td><?= $m['menu'] ?></td>
											<td>
												<div class="form-check">
													<input class="form-check-input" type="checkbox"
														<?= check_access($role['id'], $m['id']); ?>
														data-role="<?= $role['id']; ?>"
														data-menu="<?= $m['id']; ?> ">
												</div>
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
