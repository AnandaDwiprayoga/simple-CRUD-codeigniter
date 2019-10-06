<?= 
	form_open('login/proses_login');
?>
<div class="container py-5">
	<div class="row">
		<div class="col-md-6 mx-auto">
			<?= $this->session->flashdata('fail_login'); ?>
			<div class="card">
			  <div class="card-header">
			    <h3>Login</h3>
			  </div>
			  <div class="card-body">
		  		<form action="" class="form" method="post">
					<div class="form-group">
						<label for="nim">NIM</label>
						<input type="text" id="nim" name="nim" class="form-control form-control-lg rounded-0" required="">
						<div class="invalid-feedback">Oops, you missed this one</div>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control form-control-lg rounded-0" name="password" id="password" required="">
						<div class="invalid-feedback">Enter your password too!</div>
					</div>
					<button type="submit" class="btn btn-success btn-lg float-right">Login</button>
				</form>
			  </div>
			</div>
		</div>
	</div>
</div>
<?php form_close(); ?>