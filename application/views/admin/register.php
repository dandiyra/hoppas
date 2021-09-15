<div class="page-container">
	<!-- MAIN CONTENT-->
	<div class="main-content">
		<div class="section__content section__content--p30">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="map-data m-b-50">
							<h2 class="card-body-title"><?= $title ?> </h2>
							<br>
							<p class="mg-b-20 mg-sm-b-30"></p>
							<div class="login-form">
								<form action="<?= base_url('admin/register'); ?>" method="post">
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="name" name="name"
											placeholder="Name" value="<?= set_value('name'); ?>">
										<?= form_error('name', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<input type="number" class="form-control form-control-user" id="telephone"
											name="telephone" placeholder="Telephone"
											value="<?= set_value('telephone'); ?>">
										<?= form_error('telephone', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<input class="form-control form-control-user" type="text" id="email"
											name="email" placeholder="Email" value="<?= set_value('email'); ?>">
										<?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0">
											<input type="password" class="form-control form-control-user" id="password1"
												name="password1" placeholder="Password">
											<?= form_error('password1', ' <small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="col-sm-6 mb-3 mb-sm-0">
											<input type="password" class="form-control form-control-user" id="password2"
												name="password2" placeholder="Repeat Password">
										</div>
									</div>
									<div class="form-group">
										<select type="text" class="form-control form-control-user" id="role_id"
											name="role_id" placeholder="Role ID" value="<?= set_value('role_id'); ?>">
											<option selected disabled>--Select Role--</option>
											<?php foreach ($users_role as $u) : ?>
											<option value="<?= $u['id']?>"><?= $u['role']?></option>
											<?php endforeach; ?>
										</select>
										<?= form_error('role_id', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<button class="au-btn au-btn--block au-btn--green m-b-20"
										type="submit">register</button>
								</form>
							</div>
						</div>
					</div>
					<!--  END TOP CAMPAIGN-->
				</div>
			</div><!-- sl-mainpanel -->
			<!-- </div> -->
		</div>

	</div>.
	</body>
