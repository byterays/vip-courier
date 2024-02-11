<?php
$bread_crumbs = [
	["text" => "Admin", "link" => "dashboard"],
	["text" => "Profile", "link" => "#", "class" => "active"],
]
?>

<?php ob_start(); ?>
<!-- row -->
<div class="row">
	<div class="col-xl-6 col-lg-6">
		<form action="action/update-profile">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Update Profile</h4>
				</div>
				<div class="card-body">
					<div class="basic-form col-md-8 col-xs-12">

						<div class="input-group mb-3 input-info">
							<span class="input-group-text width-100 justify-left">Name</span>
							<input type="text" class="form-control" placeholder="Enter your name" required>
						</div>
						<div class="input-group mb-3 input-success">
							<span class="input-group-text width-100 justify-left">Email</span>
							<input type="email" class="form-control" placeholder="Enter your Email" required>
						</div>

						<div class="input-group mb-3  input-warning">
							<span class="input-group-text width-100 justify-left">Password</span>
							<input type="password" class="form-control" placeholder="[Enter new password]">
						</div>

					</div>
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary mb-2">Submit</button>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- row -->
<?php $content = ob_get_clean(); ?>
<?php include "theme/admin/layout.php" ?>