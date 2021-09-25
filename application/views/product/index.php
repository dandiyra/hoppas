<div class="page-container">
	<!-- MAIN CONTENT-->
	<div class="main-content">
		<div class="section__content section__content--p30">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="map-data m-b-50">
							<h2 class="card-body-title"><?= $title ?></h2>
							<?= form_error('menu', '<div class="alert alert-danger" role="alert">',' </div>'); ?>
							<?= $this->session->flashdata('message'); ?>
							<a href="<?= base_url('Product/AddProduct'); ?>" class="btn btn-sm btn-dark mb-3"
								style="float:right">Add New Product</a>
							<p class="mg-b-20 mg-sm-b-30"><br></p>
							<!-- <div class="table-wrapper"> -->
							<table id="datatable1" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Gambar</th>
										<th scope="col">Name Product</th>
										<th scope="col">Category</th>
										<th scope="col">Harga</th>
										<th scope="col">Status</th>
										<th scope="col">Stock</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1; ?>
									<?php foreach ($product as $p) : ?>
									<tr>
										<th scope="row"><?= $i ?></th>
										<td><img src="<?= base_url('assets/images/produk/' .$p['gambar'])?>"
												class="img img-responsive img-thumbnail" width="60">
										</td>
										<td><?= $p['nama_produk'] ?></td>
										<td><?= $p['nama_kategori'] ?></td>
										<td>Rp.<?= $p['harga'] ?></td>
										<td><?= $p['status_produk'] ?></td>
										<td><?= $p['stock'] ?></td>
										<td>
											
											<a href="<?= base_url('product/edit/' . $p['id_produk']) ?>"
												class="badge badge-light"><i class=" fas fa-edit"></i></a>
											<a href="<?= base_url('product/gambar/' . $p['id_produk']) ?>"
												class="badge badge-warning"><i class=" fas fa-image"></i></a>
											<a href="<?= base_url('product/delPro/' . $p['id_produk'])?>"
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
