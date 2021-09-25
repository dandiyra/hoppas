<div class="page-container">
	<!-- MAIN CONTENT-->
	<div class="main-content">
		<div class="section__content section__content--p30">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="map-data m-b-50">
							<h6 class="card-body-title"></h6>
							<p class="mg-b-20 mg-sm-b-30"></p>
							<div class="row">
								<div class="col-lg-6">
									<?= $this->session->flashdata('message'); ?>
								</div>
							</div>
							<!-- Card Title-->
							<div class="card mb-3" style="max-width: 540px;">
								<div class="row g-0">
									<div class="col-md-4">
										<img src="<?= base_url('assets/'); ?>images/icon/avatar-big-01.jpg"
											class="img-fluid rounded-start" alt="...">
									</div>
									<div class="col-md-8">
										<div class="card-body">
											<h5 class="card-title">Name : <?= $users['name'] ?></h5>
											<p class="card-text">Email : <?= $users['email'] ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Card Title -->
					</div>
					<!--  END TOP CAMPAIGN-->
				</div>
			</div><!-- sl-mainpanel -->
			<!-- </div> -->
		</div>

	</div>
	</body>
