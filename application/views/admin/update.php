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
									<div class="form-group">
										<input class="form-control form-control-user" type="text" id="email"
											name="email" placeholder="Email" value="<?= $value['email']?>">
										<?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
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
