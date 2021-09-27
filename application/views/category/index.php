<div class="page-container">
	<!-- MAIN CONTENT-->
	<div class="main-content">
		<div class="section__content section__content--p30">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="map-data m-b-50">
							<h2 class="card-body-title">All Category</h2>
							<?php if (validation_errors()) : ?>
							<div class="alert alert-danger" role="alert">
								<?= validation_errors(); ?>
							</div>
							<?php endif ?>
							<?= $this->session->flashdata('message'); ?>
							<a href="<?= base_url('Category/addCategory')?>" class="btn btn-sm btn-dark mb-3" style="float:right">Add New Category</a>
							<p class="mg-b-20 mg-sm-b-30"><br></p>
							<div class="table-wrapper">
								<table class="table table-hover">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Gambar</th>
											<th scope="col">Name</th>
											<th scope="col">Slug</th>
											<th scope="col">Urutan</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $i = 1; ?>
										<?php foreach ($category as $c) : ?>
										<tr>
											<th scope="row"><?= $i ?></th>
											<td><img src="<?= base_url('assets/images/produk/' .$c['gambar'])?>"
												class="img img-responsive img-thumbnail" width="60">
											</td>
											<td><?= $c['nama_kategori'] ?></td>
											<td><?= $c['slug_kategori'] ?></td>
											<td><?= $c['urutan'] ?></td>
											<td>
												<!-- <a href="#" class="badge badge-light"><i class="fa fa-edit"></i></a>
												<a href="#" class="badge badge-dark" id="delete"><i
														class="fa fa-trash"></i></a> -->
												<!-- <a href="#" class="badge badge-light" data-toggle="modal"
													data-target="#update<?= $c['id_kategori']; ?>"><i class="fa fa-edit"></i></a> -->
												<a href="<?= base_url('category/EditCategory/' . $c['id_kategori'])?>"
													class="badge badge-dark"><i class="fa fa-edit"></i></a>
												<a href="<?= base_url('category/delCat/' . $c['id_kategori'])?>"
													class="badge badge-dark" id="delete"><i class="fa fa-trash"></i></a>
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

		<!-- Modal Add new-->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="<?= base_url('Category/addCat'); ?>" method="post">
						<div class="modal-body">
							<div class="form-group">
								<input type="text" class="form-control" id="nama_kategori" name="nama_kategori"
									placeholder="Name Category">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="slug_kategori" name="slug_kategori"
									placeholder="Slug Category">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="urutan" name="urutan" placeholder="Urutan">
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Add</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!-- Modal Update -->
		<?php $i = 1; ?>
		<?php foreach ($category as $c) : ; ?>
		<div class="modal fade" id="update<?= $c['id_kategori']; ?>" tabindex="-1" role="dialog"
			aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Upadate Request</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="<?= base_url('Category/UpCat/' . $c['id_kategori']); ?>" method="post">
						<div class="modal-body">
							<div class="form-group">
								<input type="text" class="form-control" id="nama_kategori" name="nama_kategori"
									placeholder="Name Category" value="<?= $c['nama_kategori']?>">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="slug_kategori" name="slug_kategori"
									placeholder="Slug Category" value="<?= $c['slug_kategori']?>">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="urutan" name="urutan" placeholder="Urutan"
								value="<?= $c['urutan']?>">
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php $i++; ?>
		<?php endforeach; ?>
