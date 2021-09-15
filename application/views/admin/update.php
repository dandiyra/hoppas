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
								<form action="<?= base_url('Admin/update/' . $value['id']); ?>" method="post">
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="name" name="name"
											placeholder="Name" value="<?= $value['name']?>">
										<?= form_error('name', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<input type="number" class="form-control form-control-user" id="telephone"
											name="telephone" placeholder="Telephone" value="<?= $value['telephone']?>">
										<?= form_error('telephone', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0">
										<select type="text" class="form-control form-control-user" id="division"
												name="division" placeholder="Division"
												value="<?= set_value('division'); ?>">
												<option selected disabled>Select Division..</option>
												<?php foreach ($division as $d) : ?>
												<option value="<?= $d['division']?>"><?= $d['division']?></option>
												<?php endforeach; ?>
											</select>
											<?= form_error('division', ' <small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="col-sm-6 mb-3 mb-sm-0">
											<select type="text" class="form-control form-control-user" id="subDivision"
												name="subDivision" placeholder="Sub Division"
												value="<?= set_value('subDivision'); ?>">
												<option selected disabled>Select Sub Division..</option>
												<?php foreach ($subDivision as $s) : ?>
												<option value="<?= $s['subDivision']?>"><?= $s['subDivision']?></option>
												<?php endforeach; ?>
											</select>
											<?= form_error('subDivision', ' <small class="text-danger pl-3">', '</small>'); ?>
										</div>
									</div>
									<div class="form-group">
										<input class="form-control form-control-user" type="text" id="email"
											name="email" placeholder="Email" value="<?= $value['email']?>">
										<?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<select type="text" class="form-control form-control-user" id="plan	"
											name="plan" placeholder="Plan" value="<?= $value['plan']?>">
											<option selected disabled>Select Plan..</option>
											<?php foreach ($plans as $p) : ?>
											<option value="<?= $p['plans']?>"><?= $p['plans']?></option>
											<?php endforeach; ?>
										</select>
										<?= form_error('role_id', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<select type="text" class="form-control form-control-user" id="role_id"
											name="role_id" placeholder="Role ID" value="<?= $value['role_id']?>">
											<option selected disabled>Select Role..</option>
											<option value="0">Admin Web</option>
											<option value="1">Staff</option>
											<option value="2">Kabag</option>
											<option value="3">Direktur</option>
										</select>
										<?= form_error('role_id', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<button class="au-btn au-btn--block au-btn--green m-b-20"
										type="submit">update</button>
								</form>
							</div>
						</div>
					</div>
					<!--  END TOP CAMPAIGN-->
				</div>
			</div><!-- sl-mainpanel -->
			<!-- </div> -->
		</div>

	</div>
	</body>
