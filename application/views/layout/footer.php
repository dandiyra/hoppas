<?php 
	// Load Configuration Website
	$site		= $this->M_Config->listing();
?>
<?php
	$navProdukFooter = $this->M_Config->navProduk();
?>
<!-- Footer -->
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
	<div class="flex-w p-b-90">
		<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
			<h4 class="s-text12 p-b-30">
				GET IN TOUCH
			</h4>

			<div>
				<p class="s-text7 w-size27">
					<i class="fa fa-phone"></i> <?= nl2br($site['telephone'])?>
					<br><i class="fa fa-envelope"></i> <?=($site['email'])?>
				</p>

				<div class="flex-m p-t-30">
					<a href="<?=$site['facebook']?>" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
					<a href="<?=$site['instagram']?>" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
				</div>
			</div>
		</div>

		<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
			<h4 class="s-text12 p-b-30">
				Categories
			</h4>

			<ul>
				<?php foreach($navProdukFooter as $navProdukFooter) { ?>
				<li class="p-b-9">
					<a href="<?=base_url('productdetail/kategori/'.$navProdukFooter->slug_kategori)?>" class="s-text7">
						<?=$navProdukFooter->nama_kategori?>
					</a>
				</li>
				<?php } ?>
			</ul>
		</div>

		<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
			<h4 class="s-text12 p-b-30">
				Links
			</h4>

			<ul>
				<li class="p-b-9">
					<a href="<?= base_url()?>" class="s-text7">Home</a>
				</li>

				<li class="p-b-9">
					<a href="<?= base_url('productdetail/')?>" class="s-text7">Product</a>
				</li>

				<li class="p-b-9">
					<a href="<?=base_url('home/about/')?>" class="s-text7">About</a>
				</li>
			</ul>
		</div>
		<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
			<h4 class="s-text12 p-b-30">
				Newsletter
			</h4>

			<form>
				<div class="effect1 w-size9">
					<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
					<span class="effect1-line"></span>
				</div>

				<div class="w-size2 p-t-20">
					<!-- Button -->
					<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
						Subscribe
					</button>
				</div>

			</form>
		</div>
	</div>

	<div class="t-center p-l-15 p-r-15">
		<div class="t-center s-text8 p-t-20">
			Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o"
				aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
		</div>
	</div>
</footer>

<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
	<span class="symbol-btn-back-to-top">
		<i class="fa fa-angle-double-up" aria-hidden="true"></i>
	</span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>
<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
<script type="text/javascript" src="<?= base_url('assets/'); ?>user/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?= base_url('assets/'); ?>user/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?= base_url('assets/'); ?>user/vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="<?= base_url('assets/'); ?>user/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?= base_url('assets/'); ?>user/vendor/select2/select2.min.js"></script>
<script type="text/javascript">
	$(".selection-1").select2({
		minimumResultsForSearch: 20,
		dropdownParent: $('#dropDownSelect1')
	});


	$(".selection-2").select2({
		minimumResultsForSearch: 20,
		dropdownParent: $('#dropDownSelect2')
	});

</script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?= base_url('assets/'); ?>user/vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/'); ?>user/js/slick-custom.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?= base_url('assets/'); ?>user/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?= base_url('assets/'); ?>user/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?= base_url('assets/'); ?>user/vendor/sweetalert/sweetalert.min.js"></script>
<script type="text/javascript">
	$('.block2-btn-addcart').each(function () {
		var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
		$(this).on('click', function () {
			swal(nameProduct, "is added to cart !", "success");
		});
	});

	$('.block2-btn-addwishlist').each(function () {
		var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
		$(this).on('click', function () {
			swal(nameProduct, "is added to wishlist !", "success");
		});
	});

	$('.btn-addcart-product-detail').each(function () {
		var nameProduct = $('.product-detail-name').html();
		$(this).on('click', function () {
			swal(nameProduct, "is added to wishlist !", "success");
		});
	});

</script>

<!--===============================================================================================-->
<script src="<?= base_url('assets/'); ?>user/js/main.js"></script>

</body>

</html>
