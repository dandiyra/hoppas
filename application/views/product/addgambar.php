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
								<form enctype="multipart/form-data" action="<?= base_url('product/addGam'); ?>"
									method="post">
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="judul_gambar"
											name="judul_gambar" placeholder="Judul Gambar" required>
										<?= form_error('judul_gambar', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
                                    <input type="text" name="idProduct" value="<?= $produk['id_produk'] ?>" hidden>
									<div class="form-group">
										<label for="gambar">Product Piture</label>
										<input type="file" class="form-control form-control-user" id="gambar"
											name="gambar">
										<?= form_error('gambar', ' <small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<button class="au-btn au-btn--block au-btn--green m-b-20 " type="submit">Add
										Gambar</button>
								</form>
							</div>
                            <table id="datatable1" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Gambar</th>
										<th scope="col">Name Product</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1; ?>
									<?php foreach ($gambar as $gambar) : ?>
									<tr>
										<th scope="row"><?= $i ?></th>
										<td><img src="<?= base_url('assets/images/produk/' .$gambar['gambar'])?>"
												class="img img-responsive img-thumbnail" width="60">
										</td>
										<td><?= $gambar['judul_gambar'] ?></td>
										<td>
											<a href="<?= base_url('product/delGam/' . $produk['id_produk'] . '/' .$gambar['id_gambar'])?>"
												class="badge badge-dark" id="delete"><i class="fa fa-trash"></i></a>
										</td>
									</tr>
									<?php $i++; ?>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
					<!--  END TOP CAMPAIGN-->
				</div>
			</div><!-- sl-mainpanel -->
		</div>
	</div>
	</body>
