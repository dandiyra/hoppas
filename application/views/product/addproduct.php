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
										<input type="text" class="form-control form-control-user" id="nama_produk"
											name="nama_produk" placeholder="Name Product">
										<?= form_error('nama_produk', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<select type="text" class="form-control form-control-user" id="id_kategori"
										name="id_kategori" placeholder="Category"
										value="<?= set_value('id_kategori'); ?>">
										<option selected disabled>-- Select Category --</option>
										<?php foreach ($category as $c) : ?>
										<option value="<?= $c['id_kategori']?>"><?= $c['nama_kategori']?></option>
										<?php endforeach; ?>
									</select>
									<?= form_error('id_kategori', ' <small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="text" class="form-control form-control-user" id="kode_produk"
										name="kode_produk" placeholder="Code Product">
									<?= form_error('kode_produk', ' <small class="text-danger pl-3">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="number" class="form-control form-control-user" id="stock" name="stock"
										placeholder="Stock">
									<?= form_error('stock', ' <small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="number" class="form-control form-control-user" id="harga" name="harga"
										placeholder="Price">
									<?= form_error('harga', ' <small class="text-danger pl-3">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="text" class="form-control form-control-user" id="ukuran" name="ukuran"
										placeholder="Size">
									<?= form_error('ukuran', ' <small class="text-danger pl-3">', '</small>'); ?>
								</div>
								<div class="col-sm-6 mb-3 mb-sm-0">
									<input type="text" class="form-control form-control-user" id="berat" name="berat"
										placeholder="Weight">
								</div>
							</div>
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Description</label>
								<textarea class="form-control" id="editor" name="keterangan" rows="4"></textarea>
								<?= form_error('keterangan', ' <small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Keywords (For Seo Google)</label>
								<textarea class="form-control" id="keywords" name="keywords" rows="1"></textarea>
								<?= form_error('keywords', ' <small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="gambar">Product Picture</label>
								<input type="file" class="form-control form-control-user" id="gambar"
									name="gambar">
								<?= form_error('gambar', ' <small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="status_produk">Product Status</label>
								<select type="text" class="form-control form-control-user" id="status_produk"
										name="status_produk" placeholder="Status Product"
										value="<?= set_value('status_produk'); ?>">
										<option selected disabled>-- Status Product --</option>
										<option value="1">Active</option>
										<option value="0">InActive</option>
									</select>
									<?= form_error('id_kategori', ' <small class="text-danger pl-3">', '</small>'); ?>
								<?= form_error('gambar', ' <small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Add Product</button>
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
