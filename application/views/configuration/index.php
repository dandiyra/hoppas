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
							<a href="<?= base_url('Configuration/Edit'); ?>" class="btn btn-sm btn-dark mb-3"
								style="float:right">Update</a>
							<p class="mg-b-20 mg-sm-b-30"></p>
							<div class="login-form">
								<div class="form-group row">
									<input type="text" class="form-control form-control-user" id="id_configuration"
										name="id_configuration" placeholder="Name Website" hidden
										value="<?= $configuration['id_configuration'] ?>">
									<?= form_error('id_configuration', ' <small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group">
									<label for="namaweb">Name Website</label>
									<input type="text" class="form-control form-control-user" id="namaweb"
										name="namaweb" placeholder="Name Website" required
										value="<?= $configuration['namaweb'] ?>" disabled>
									<?= form_error('namaweb', ' <small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group row">
									<div class="col-sm-6 mb-3 mb-sm-0">
										<label for="tagline">Tagline</label>
										<input type="text" class="form-control form-control-user" id="tagline"
											name="tagline" placeholder="Tagline"
											value="<?= $configuration['tagline'] ?>" disabled required>
										<?= form_error('tagline', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="col-sm-6 mb-3 mb-sm-0">
										<label for="email">Email</label>
										<input type="email" class="form-control form-control-user" id="email"
											name="email" placeholder="Email" value="<?= $configuration['email'] ?>"
											disabled required>
										<?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
								</div>
								<div class="form-group">
									<label for="website">Website</label>
									<input type="text" class="form-control form-control-user" id="website"
										name="website" placeholder="Website" value="<?= $configuration['website'] ?>"
										disabled required>
									<?= form_error('website', ' <small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group row">
									<div class="col-sm-6 mb-3 mb-sm-0">
										<label for="facebook">Facebook</label>
										<input type="text" class="form-control form-control-user" id="facebook"
											name="facebook" placeholder="Facebook"
											value="<?= $configuration['facebook'] ?>" disabled>
										<?= form_error('facebook', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="col-sm-6 mb-3 mb-sm-0">
										<label for="instagram">Instagram</label>
										<input type="text" class="form-control form-control-user" id="instagram"
											name="instagram" placeholder="Instagram"
											value="<?= $configuration['instagram'] ?>" disabled required>
										<?= form_error('instagram', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-6 mb-3 mb-sm-0">
										<label for="telephone">Telephone</label>
										<input type="text" class="form-control form-control-user" id="telephone"
											name="telephone" placeholder="Telephone"
											value="<?= $configuration['telephone'] ?>" disabled required>
										<?= form_error('telephone', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="col-sm-6 mb-3 mb-sm-0">
										<label for="alamat">Alamat</label>
										<input type="text" class="form-control form-control-user" id="alamat"
											name="alamat" placeholder="Alamat" value="<?= $configuration['alamat'] ?>"
											disabled required>
										<?= form_error('alamat', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
								</div>
								<div class="form-group">
									<label for="exampleFormControlTextarea1">Keywords (For Seo Google)</label>
									<textarea class="form-control" id="keywords" name="keywords" placeholder="Keywords"
										rows="1" disabled><?= $configuration['keywords'] ?></textarea>
									<?= form_error('keywords', ' <small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="form-group row">
									<div class="col-sm-6 mb-3 mb-sm-0">
										<label for="logo">Logo</label>
										<img src="<?= base_url('assets/images/produk/' .$configuration['logo'])?>"
											class="img img-responsive img-thumbnail" width="30%">
										<?= form_error('logo', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="col-sm-6 mb-3 mb-sm-0">
										<label for="icon">Icon</label>
										<img src="<?= base_url('assets/images/produk/' .$configuration['icon'])?>"
											class="img img-responsive img-thumbnail" width="30%">
										<?= form_error('icon', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
								</div>
									<div class="form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0">
											<label for="metatext">Metatext</label>
											<textarea class="form-control" id="metatext" name="metatext"
												placeholder="Meta Text" rows="1"
												disabled><?= $configuration['metatext'] ?></textarea>
											<?= form_error('metatext', ' <small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="col-sm-6 mb-3 mb-sm-0">
											<label for="deskripsi">Description</label>
											<textarea class="form-control" id="deskripsi" name="deskripsi"
												placeholder="Deskripsi" rows="1"
												disabled><?= $configuration['deskripsi'] ?></textarea>
											<?= form_error('deskripsi', ' <small class="text-danger pl-3">', '</small>'); ?>
										</div>
									</div>
							</div>
						</div>
						<!--  END TOP CAMPAIGN-->
					</div>
				</div><!-- sl-mainpanel -->
			</div>
		</div>
		</body>
