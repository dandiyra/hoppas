<?php 
    // Get Data Menu From Configuration
    $navProduk      = $this->M_Config->navProduk();
?>
	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="<?= $site['facebook']?>" class="topbar-social-item fa fa-facebook"></a>
					<a href="<?= $site['instagram']?>" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-line"></a>
				</div>

				<span class="topbar-child1">
					ALL BOUT STEAL
				</span>

				<div class="topbar-child2">
					<div class="row">
						<div class="col-md">
							<span class="topbar-email">
								<?= $site['email']?>
							</span>
						</div>
						<div class="col-md">
							<span class="topbar-email">
								<?= $site['telephone']?>
							</span>
						</div>
					</div>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="<?=base_url('home/')?>" class="logo">
					<img src="<?= base_url('assets/images/produk/'.$site['logo']); ?>" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="<?= base_url()?>">Home</a>
							</li>
							<li>
								<a href="<?= base_url('productdetail/')?>">Product</a>
								<ul class="sub_menu">
									<?php foreach($navProduk as $navProduk) { ?>
									<li><a
											href="<?= base_url('productdetail/kategori/'.$navProduk->slug_kategori) ?>"><?= $navProduk->nama_kategori?></a>
									</li>
									<?php } ?>
								</ul>
							</li>
							<li>
								<a href="<?=base_url('home/about/')?>">About</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>