  <div class="page-wrapper">
  	<div class="page-content--bge5">
  		<div class="container">
  			<div class="login-wrap">
  				<div class="login-content">
  					<div class="login-logo">
  						<a href="#">
  							<img src="<?= base_url('assets/'); ?>admin/images/icon/logo.png" alt="CoolAdmin">
  						</a>
  					</div>
  					<?= $this->session->flashdata('message'); ?>
  					<div class="login-form">
  						<form action="<?= base_url('auth'); ?>" method="post">
  							<div class="form-group">
  								<input class="au-input au-input--full" type="text" id="email" name="email"
  									placeholder="Email" value="<?= set_value('email'); ?>">
  								<?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
  							</div>
  							<div class="form-group">
  								<input class="au-input au-input--full" type="password" id="password" name="password"
  									placeholder="Password">
  								<?= form_error('password', ' <small class="text-danger pl-3">', '</small>'); ?>
  							</div>
  							<button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
  						</form>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>
