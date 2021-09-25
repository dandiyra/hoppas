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
							<a href="about.html">About</a>
						</li>

						<li>
							<a href="contact.html">Contact</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<!-- Header Mobile -->
	<div class="wrap_header_mobile">
		<!-- Logo moblie -->
		<a href="index.html" class="logo-mobile">
			<img src="<?= base_url('assets/images/produk/'.$site['logo']); ?>" alt="IMG-LOGO">

		</a>

		<!-- Button show menu -->
		<div class="btn-show-menu">
			<!-- Header Icon mobile -->
			<div class="header-icons-mobile">
				<a href="#" class="header-wrapicon1 dis-block">
					<img src="<?= base_url('assets/'); ?>user/images/icons/icon-header-01.png" class="header-icon1"
						alt="ICON">
				</a>

				<span class="linedivide2"></span>
			</div>

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
						<a href="#" class="topbar-social-item fa fa-facebook"></a>
						<a href="#" class="topbar-social-item fa fa-instagram"></a>
						<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
						<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
						<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
					</div>
				</li>

				<li class="item-menu-mobile">
					<a href="<?=base_url();?>">Home</a>
				</li>
				<li class="item-menu-mobile">
					<a href="<?=base_url('produk');?>">Product</a>
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
					<a href="product.html">Sale</a>
				</li>

				<li class="item-menu-mobile">
					<a href="cart.html">Features</a>
				</li>

				<li class="item-menu-mobile">
					<a href="blog.html">Blog</a>
				</li>

				<li class="item-menu-mobile">
					<a href="about.html">About</a>
				</li>

				<li class="item-menu-mobile">
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</nav>
	</div>
	</div>
	</div>
</header>
