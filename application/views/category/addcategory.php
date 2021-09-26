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
								<form enctype="multipart/form-data" action="<?= base_url('Category/addCat'); ?>"
									method="post">
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="nama_kategori"
											name="nama_kategori" placeholder="Name Category" required>
										<?= form_error('nama_kategori', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="urutan"
											name="urutan" placeholder="Urutan" required>
										<?= form_error('urutan', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
										<div class="form-group">
											<label for="gambar">Product Category</label>
											<input type="file" class="form-control form-control-user" id="gambar"
												name="gambar">
											<?= form_error('gambar', ' <small class="text-danger pl-3">', '</small>'); ?>
										</div>
									<button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Add
										Category</button>
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
