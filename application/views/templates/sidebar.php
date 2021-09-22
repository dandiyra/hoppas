<!-- MENU SIDEBAR-->
<?php if ($users['role_id'] == 0) { ?>
<aside class="menu-sidebar2">
	<div class="logo">
		<a href="#">
			<img src="<?= base_url('assets/admin/'); ?>images/icon/logo-white.png" alt="Spectrum Cahaya Nusantara" />
		</a>
	</div>
	<div class="menu-sidebar2__content js-scrollbar1">
		<div class="account2">
			<div class="image img-cir img-120">
				<img src="<?= base_url('assets/admin/'); ?>images/icon/avatar-big-01.jpg" />
			</div>
			<h4 href="<?= base_url('Users/'); ?>" class="name"><?= $users['name']; ?></h4>
			<h10 class="email"><?= $users['email']; ?></h10>
		</div>
		<nav class="navbar-sidebar">
			<ul class="list-unstyled navbar__list">
				<li>
					<a class="js-arrow" href="#">
						<i class="fas fa-box"></i>Product
						<span class="arrow">
							<i class="fas fa-angle-down"></i>
						</span>
					</a>
					<ul class="list-unstyled navbar__sub-list js-sub-list">

						<li>
							<a href="<?= base_url('product/') ?>">
								<i class="fas fa-angle-right"></i>All Product</a>
						</li>
						<li>
							<a href="<?= base_url('category/') ?>">
								<i class="fas fa-angle-right"></i>Category</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="js-arrow" href="#">
						<i class="fas fa-cog"></i>Configuration Web
						<span class="arrow">
							<i class="fas fa-angle-down"></i>
						</span>
					</a>
					<ul class="list-unstyled navbar__sub-list js-sub-list">

						<li>
							<a href="<?= base_url('Configuration/') ?>">
								<i class="fas fa-angle-right"></i>Config Basic</a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</aside>
<?php } else if ($users['role_id'] == 1) { ?>
<aside class="menu-sidebar2">
	<div class="logo">
		<a href="#">
			<img src="<?= base_url('assets/'); ?>images/icon/logo-white.png" alt="Spectrum Cahaya Nusantara" />
		</a>
	</div>
	<div class="menu-sidebar2__content js-scrollbar1">
		<div class="account2">
			<div class="image img-cir img-120">
				<img src="<?= base_url('assets/'); ?>images/icon/avatar-big-01.jpg" />
			</div>
			<h4 href="<?= base_url('Users/'); ?>" class="name"><?= $users['name']; ?></h4>
			<h10 class="email"><?= $users['email']; ?></h10>
		</div>
		<nav class="navbar-sidebar">
			<ul class="list-unstyled navbar__list">
				<li class="has-sub">
					<a class="js-arrow" href="#">
						<i class="fas fa-user"></i>Request Job
						<span class="arrow">
							<i class="fas fa-angle-down"></i>
						</span>
					</a>
					<ul class="list-unstyled navbar__sub-list js-sub-list">
						<li class="active has-sub">
						<li>
							<a href="<?= base_url('Staff/') ?>">
								<i class="fas fa-desktop"></i>Monitoring Job</a>
						</li>
				</li>
			</ul>
		</nav>
	</div>
</aside>
<?php } else if ($users['role_id'] == 2) { ?>
<aside class="menu-sidebar2">
	<div class="logo">
		<a href="#">
			<img src="<?= base_url('assets/'); ?>images/icon/logo-white.png" alt="Spectrum Cahaya Nusantara" />
		</a>
	</div>
	<div class="menu-sidebar2__content js-scrollbar1">
		<div class="account2">
			<div class="image img-cir img-120">
				<img src="<?= base_url('assets/'); ?>images/icon/avatar-big-01.jpg" />
			</div>
			<h4 href="<?= base_url('Users/'); ?>" class="name"><?= $users['name']; ?></h4>
			<h10 class="email"><?= $users['email']; ?></h10>
		</div>
		<nav class="navbar-sidebar">
			<ul class="list-unstyled navbar__list">
				<li class="has-sub">
					<ul class="list-unstyled navbar__sub-list js-sub-list">
						<li class="active has-sub">
						<li>
							<a href="<?= base_url('Kabag/KabIt') ?>">
								<i class="fas fa-desktop"></i>Request</a>
						</li>
						<li>
							<a href="<?= base_url('FormReq/') ?>">
								<i class="fas fa-archive"></i>Form Request</a>
						</li>
						<li>
							<a href="<?= base_url('FormReq/') ?>">
								<i class="fas fa-archive"></i>Monitor Request</a>
						</li>
						<li>
							<a href="<?= base_url('Kabag/requestType') ?>">
								<i class="fas fa-archive"></i>Request Type</a>
						</li>
						<li>
							<a href="<?= base_url('Division/subdivision') ?>">
								<i class="fas fa-archive"></i>Sub Division</a>
						</li>
				</li>
			</ul>
		</nav>
	</div>
</aside>
<?php } else if ($users['role_id'] == 3) { ?>

<?php } else if ($users['role_id'] == 5) { ?>

<?php } ?>
<!-- END MENU SIDEBAR-->
