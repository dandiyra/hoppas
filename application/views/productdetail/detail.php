<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
	<a href="<?=base_url()?>" class="s-text16">
		Home
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>

	<a href="<?=base_url('Produk')?>" class="s-text16">
		Produk
		<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
	</a>


	<span class="s-text17">
		<?=$title?>
	</span>
</div>
<!-- Product Detail -->
<div class="container bgwhite p-t-35 p-b-80">
	<div class="flex-w flex-sb">
		<div class="w-size13 p-t-30 respon5">
			<div class="wrap-slick3 flex-sb flex-w">
				<div class="wrap-slick3-dots"></div>

				<div class="slick3">
					<div class="item-slick3" data-thumb="<?=base_url('assets/images/produk/'.$produk['gambar'])?>">
						<div class="wrap-pic-w">
							<img src="<?=base_url('assets/images/produk/'.$produk['gambar'])?>"
								alt="<?=$produk['nama_produk']?>">
						</div>
					</div>
					<?php if($gambar) {
						foreach($gambar as $gambar) {?>
					<div class="item-slick3" data-thumb="<?=base_url('assets/images/produk/'.$gambar['gambar'])?>">
						<div class="wrap-pic-w">
							<img src="<?=base_url('assets/images/produk/'.$gambar['gambar'])?>" alt="IMG-PRODUCT">
						</div>
					</div>
					<?php }} ?>
				</div>
			</div>
		</div>

		<div class="w-size14 p-t-30 respon5">
			<h4 class="product-detail-name m-text16 p-b-13">
				<?=$produk['nama_produk']?>
			</h4>

			<span class="m-text17">
				Rp.<?= number_format($produk['harga'],'0',',','.' )?>
			</span>

			<!--  -->
			<div class="p-b-45">
				<span class="s-text8">Categories: <?=$produk['nama_kategori']?></span>
			</div>


			<!--  -->
			<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
				<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
					Description
					<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
					<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
				</h5>

				<div class="dropdown-content dis-none p-t-15 p-b-23">
					<p class="s-text8">
						<?=$produk['keterangan']?>
					</p>
				</div>
			</div>
			<br>
			<div class="p-b-45">
				<span class="m-text10"> Bit Now! </span>
				<br>
				<span class="m-text17">
					<!-- <a href="<?= $site['facebook']?>" class="topbar-social-item fa fa-facebook"></a> -->
					<a href="<?= $site['instagram']?>" class="topbar-social-item fa fa-instagram"> All Bout Steal</a>
					<a href="#" class="topbar-social-item fa fa-line"></a>
				</span>
			</div>


		</div>
	</div>
</div>

<!-- Relate Product -->
<section class="relateproduct bgwhite p-t-45 p-b-138">
	<div class="container">
		<div class="sec-title p-b-60">
			<h3 class="m-text5 t-center">
				Related Products
			</h3>
		</div>

		<!-- Slide2 -->
		<div class="wrap-slick2">
			<div class="slick2">
				<?php foreach($produk_related as $produk_related) { ?>
				<div class="item-slick2 p-l-15 p-r-15">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
							<img src="<?= base_url('assets/images/produk/'.$produk_related['gambar']); ?>"
								alt="<?= $produk_related['nama_produk']?>">
							<div class="block2-overlay trans-0-4">
							</div>
						</div>
						<div class="block2-txt p-t-20">
							<a href="<?=base_url('productdetail/detail/'. $produk_related['slug_produk'])?>"
								class="block2-name dis-block s-text3 p-b-5">
								<?= $produk_related['nama_produk']?>
							</a>
							<span class="block2-price m-text6 p-r-5">
								Rp.<?= number_format($produk_related['harga'],'0',',','.' )?>
							</span>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>

	</div>
</section>
