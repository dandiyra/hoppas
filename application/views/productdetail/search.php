<?php 
	// Load Configuration Website
	$site		= $this->M_Config->listing();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $title?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- SEO -->
	<meta name="keywords" content="<?=($site['keywords']) ?>">
	<meta name="description" content="<?=($title) ?>, <?=($site['deskripsi']) ?>">

	<!--===============================================================================================-->
	<!-- // Icon From Configuration Basic -->
	<link rel="icon" type="image/png" href="<?= base_url('assets/images/produk/' .$site['icon']) ?>" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?= base_url('assets/'); ?>user/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?= base_url('assets/'); ?>user/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>user/fonts/themify/themify-icons.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?= base_url('assets/'); ?>user/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>user/fonts/elegant-font/html-css/style.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>user/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?= base_url('assets/'); ?>user/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?= base_url('assets/'); ?>user/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>user/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?= base_url('assets/'); ?>user/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>user/vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>user/vendor/lightbox2/css/lightbox.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>user/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>user/css/main.css">
	<!--===============================================================================================-->
</head>

<body class="animsition">
<!-- Title Page -->
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m mt"
	style="background-image: url(<?=base_url()?>assets/user/images/heading-pages-02.jpg);">
	<h2 class="l-text2 t-center">
		<?=	$title ?>
	</h2>
	<p class="m-text13 t-center">
		<?=	$site['namaweb'] ?> | <?= $site['tagline']?>
	</p>
</section>


<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
				<div class="leftbar p-r-20 p-r-0-sm">
					<!--  -->
					<h4 class="m-text14 p-b-7">
						Categories
					</h4>
					<ul class="p-b-54">
						<?php foreach($listing_kategori as $listing_kategori) { ?>
						<li class="p-t-4">
							<a href="<?= base_url('productdetail/kategori/'.$listing_kategori['slug_kategori']) ?>"
								class="s-text13 active1">
								<?= $listing_kategori['nama_kategori']?>
							</a>
						</li>
						<?php } ?>
					</ul>
                    <form action="<?= base_url('Productdetail/search'); ?>" method="get">
					<div class="search-product pos-relative bo4 of-hidden">
						<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="keywords"
							placeholder="Search Products...">

						<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
							<i class="fs-12 fa fa-search" aria-hidden="true"></i>
						</button>
					</div>
					</form>
				</div>
			</div>

			<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
				<!--  -->
				<div class="flex-sb-m flex-w p-b-35">
					<!-- <div class="flex-w">
						<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
							<select class="selection-2" name="sorting">
								<option>Default Sorting</option>
								<option>Popularity</option>
								<option>Price: low to high</option>
								<option>Price: high to low</option>
							</select>
						</div>

						<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
							<select class="selection-2" name="sorting">
								<option>Price</option>
								<option>$0.00 - $50.00</option>
								<option>$50.00 - $100.00</option>
								<option>$100.00 - $150.00</option>
								<option>$150.00 - $200.00</option>
								<option>$200.00+</option>

							</select>
						</div>
					</div> -->

					<span class="s-text8 p-t-5 p-b-5">
						Showing 1–12 of 16 results
					</span>
				</div>

				<!-- Product -->
				<div class="row">
					<?php foreach($produk as $produk) { ?>
					<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								<img src="<?= base_url('assets/images/produk/'.$produk['gambar']) ?>"
									alt="<?= $produk['nama_produk']?>">
								<div class="block2-overlay trans-0-4">
									<div class="block2-btn-addcart w-size1 trans-0-4">
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="<?=base_url('productdetail/detail/'. $produk['slug_produk'])?>"
									class="block2-name dis-block s-text3 p-b-5">
									<?= $produk['nama_produk']?>
								</a>

								<span class="block2-price m-text6 p-r-5">
									Rp.<?= number_format($produk['harga'],'0',',','.' )?>
								</span>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>

				<!-- Pagination -->
				<!-- <div class="pagination flex-m flex-w p-t-26">
					<?= $pagin ?>
				</div> -->
			</div>
		</div>
	</div>
</section>
