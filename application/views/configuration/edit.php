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
								<form enctype="multipart/form-data" action="<?= base_url('Configuration/editData'); ?>"
									method="post">
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="id_configuration"
											name="id_configuration" placeholder="Name Website" hidden
											value="<?= $configuration['id_configuration'] ?>">
										<?= form_error('id_configuration', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="namaweb"
											name="namaweb" placeholder="Name Website" required
											value="<?= $configuration['namaweb'] ?>">
										<?= form_error('namaweb', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="tagline"
											name="tagline" placeholder="Tagline"
											value="<?= $configuration['tagline'] ?>" required>
										<?= form_error('tagline', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<input type="email" class="form-control form-control-user" id="email"
											name="email" placeholder="Email" value="<?= $configuration['email'] ?>"
											required>
										<?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="website"
											name="website" placeholder="Website"
											value="<?= $configuration['website'] ?>" required>
										<?= form_error('website', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="facebook"
											name="facebook" placeholder="Facebook"
											value="<?= $configuration['facebook'] ?>">
										<?= form_error('facebook', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="instagram"
											name="instagram" placeholder="Instagram"
											value="<?= $configuration['instagram'] ?>" required>
										<?= form_error('instagram', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="telephone"
											name="telephone" placeholder="Telephone"
											value="<?= $configuration['telephone'] ?>" required>
										<?= form_error('telephone', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="alamat"
											name="alamat" placeholder="Alamat" value="<?= $configuration['alamat'] ?>"
											required>
										<?= form_error('alamat', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<!-- <label for="exampleFormControlTextarea1">Keywords (For Seo Google)</label> -->
										<textarea class="form-control" id="keywords" name="keywords"
											placeholder="Keywords" rows="1"><?= $configuration['keywords'] ?></textarea>
										<?= form_error('keywords', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<label for="logo">New Logo</label>
										<input type="file" class="form-control form-control-user" id="logo"
											name="logo">
										<?= form_error('logo', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<label for="icon">New Icon</label>
										<input type="file" class="form-control form-control-user" id="icon"
											name="icon">
										<?= form_error('icon', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<!-- <label for="exampleFormControlTextarea1">Keywords (For Seo Google)</label> -->
										<textarea class="form-control" id="metatext" name="metatext"
											placeholder="Meta Text"
											rows="1"><?= $configuration['metatext'] ?></textarea>
										<?= form_error('metatext', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<!-- <label for="exampleFormControlTextarea1">Keywords (For Seo Google)</label> -->
										<textarea class="form-control" id="deskripsi" name="deskripsi"
											placeholder="Deskripsi"
											rows="2"><?= $configuration['deskripsi'] ?></textarea>
										<?= form_error('deskripsi', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<button class="au-btn au-btn--block au-btn--green m-b-20"
										type="submit">Update</button>
								</form>
							</div>
						</div>
					</div>
					<!--  END TOP CAMPAIGN-->
				</div>
			</div><!-- sl-mainpanel -->
		</div>
	</div>
	</body>
