<header class="header-desktop2">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="header-wrap2">
				<div class="logo d-block d-lg-none">
					<a href="#">
						<img src="<?= base_url('assets/admin/'); ?>images/icon/logo-white.png" alt="CoolAdmin" />
					</a>
				</div>
				<div class="header-button-item mr-0 js-sidebar-btn">
					<i class="zmdi zmdi-menu"></i>
				</div>
				<div class="setting-menu js-right-sidebar d-none d-lg-block">
					<div class="account-dropdown__body">
						<div class="account-dropdown__item">
							<a href="<?= base_url('Users/'); ?>">
								<i class="fas fa-user"></i>My Profile</a>
						</div>
						<div class="account-dropdown__item">
							<a href="<?= base_url('Users/edit'); ?>">
								<i class="fas fa-users"></i>Edit Profile</a>
						</div>
						<div class="account-dropdown__item">
							<a href="<?= base_url('Users/changePassword') ?>">
								<i class="fas fa-tachometer-alt"></i>Change Password</a>
						</div>
						<div class="account-dropdown__item">
							<a href="<?= base_url('auth/logout'); ?>">
								<i class="fas fa-sign-out-alt"></i>Logout</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
	<div class="logo">
		<a href="#">
			<img src="<?= base_url('assets/admin/'); ?>images/icon/logo-white.png" alt="Cool Admin" />
		</a>
	</div>
	<div class="menu-sidebar2__content js-scrollbar2">
		<div class="account2">
			<div class="image img-cir img-120">
				<img src="<?= base_url('assets/admin/'); ?>images/icon/avatar-big-01.jpg" alt="John Doe" />
			</div>
			<h4 class="name"><?= $users['name']?></h4>
			<a href="<?= base_url('auth/logout'); ?>">Sign out</a>
		</div>
		<nav class="navbar-sidebar2">
			<ul class="list-unstyled navbar__list">
				<?php if ($dashboard == $title) {?>
				<li class="active has-sub">
					<a class="js-arrow" href="#">
						<i class="fas fa-tachometer-alt"></i><?= $dashboard ?>
					</a>
				</li>
				<?php }else{ ?>
				<li class="has-sub">
					<a class="js-arrow" href="#">
						<i class="fas fa-tachometer-alt"></i><?= $dashboard ?>
					</a>
				</li>
				<?php } ?>
				<li class="has-sub">
					<a class="js-arrow" href="#">
						<i class="fas fa-user"></i>My Profile
					</a>
				</li>
				<li class="has-sub">
					<a class="js-arrow" href="<?= base_url('auth/logout'); ?>">
						<i class="fas fa-sign-out-alt"></i>Logout
					</a>
				</li>
			</ul>
			</li>
			</ul>
		</nav>
	</div>
</aside>
