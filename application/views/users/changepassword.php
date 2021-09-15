<div class="page-container">
	<!-- MAIN CONTENT-->
	<div class="main-content">
		<div class="section__content section__content--p30">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="map-data m-b-50">
							<h2 class="card-body-title"><?= $title ?> </h2>
							<p class="mg-b-20 mg-sm-b-30"></p>
							<!-- Card Title-->
							<div class="row">
								<div class="col-lg-6">
									<?= $this->session->flashdata('message'); ?>
									<form action="<?= base_url('users/changepassword'); ?>" method="post">
										<div class="form-group">
											<label for="current_password">Current Password</label>
											<input type="password" class="form-control" id="current_password"
												name="current_password">
											<?= form_error('current_password', ' <small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group">
											<label for="new_password1">New Password</label>
											<input type="password" class="form-control" id="new_password1"
												name="new_password1">
											<?= form_error('new_password1', ' <small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group">
											<label for="new_password2">Repeat Password</label>
											<input type="password" class="form-control" id="new_password2"
												name="new_password2">
											<?= form_error('new_password2', ' <small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-dark">Change Password</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!-- End Card Title -->
					</div>
					<!--  END TOP CAMPAIGN-->
				</div>
			</div><!-- sl-mainpanel -->
			<!-- </div> -->
		</div>

	</div>
	</body>
