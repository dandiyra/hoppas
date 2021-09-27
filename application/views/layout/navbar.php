<?php 
    // Get Data Menu From Configuration
    $navProdukMobile      = $this->M_Config->navProduk();
?>
<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
				<img src="<?= base_url('assets/images/produk/'.$site['logo']); ?>" alt="IMG-LOGO">

			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu">
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							All About Steal
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
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
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="<?= $site['facebook']?>" class="topbar-social-item fa fa-facebook"></a>
							<a href="<?= $site['instagram']?>" class="topbar-social-item fa fa-instagram"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="<?=base_url();?>">Home</a>
					</li>
					<li class="item-menu-mobile">
						<a href="<?= base_url('productdetail/')?>">Product</a>
						<ul class="sub-menu">
							<?php foreach($navProdukMobile as $navProdukMobile) { ?>
							<li>
								<a
									href="<?= base_url('produk/categori/'.$navProdukMobile->slug_kategori) ?>"><?= $navProdukMobile->nama_kategori?></a>
							</li>
							<?php } ?>
						</ul>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>
					<li class="item-menu-mobile">
						<a href="<?=base_url('home/about')?>">About</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
