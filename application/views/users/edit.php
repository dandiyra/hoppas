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
							<br>
							<div class="row">
								<div class="col-lg-8">
									<?= form_open_multipart('users/edit'); ?>
									<div class="form-group row">
										<label for="email" class="col-sm-2 col-form-label">Email</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="email" name="email"
												value="<?= $users['email']; ?>" readonly>
										</div>
									</div>
									<div class="form-group row">
										<label for="name" class="col-sm-2 col-form-label">Full Name</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="name" name="name"
												value="<?= $users['name']; ?>" readonly>
											<?= form_error('name', ' <small class="text-danger pl-3">', '</small>'); ?>
										</div>
									</div>
									<div class="form-group row">
										<label for="name" class="col-sm-2 col-form-label">No. Telepon</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="telephone" name="telephone"
												value="<?= $users['telephone']; ?>">
											<?= form_error('name', ' <small class="text-danger pl-3">', '</small>'); ?>
										</div>
									</div>
									<div class="form-group row justify-content-end">
										<div class="col-sm-10">
											<button type="submit" class="btn btn-warning">Edit</button>
										</div>
									</div>
									</form>
								</div>
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
