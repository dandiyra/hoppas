<!-- Banner -->
<section class="banner bgwhite p-t-40 p-b-40">
	<div class="container">
		<div class="row">
			<?php foreach($showcat as $s) { ?>
				<!-- block1 -->
				<div class="col-sm-6 col-md-6 col-lg-6 m-l-r-auto">
				<div class=" hov-img-zoom pos-relative m-b-30">
					<img src="<?= base_url('assets/images/produk/'.$s['gambar']) ?>" alt="IMG-BENNER">
					<div class="block1-wrapbtn w-size2">
						<!-- Button -->
						<a href="<?= base_url('productdetail/kategori/'.$s['slug_kategori']) ?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
						<?= $s['nama_kategori']?>
						</a>
					</div>
				</div>
			</div>
				<?php } ?>
		</div>
	</div>
</section>