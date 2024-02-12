<?php 
	$bread_crumbs=[
		["text"=>"Consignments", "link"=>"list-consignments"],
		["text"=>"Import", "link"=>"#", "class"=>"active"],
	]
?>

<?php ob_start(); ?>

		<!-- row -->
		<div class="row">
			<div class="col-xl-6 col-lg-6">
				<form action="action/import-consignments" method="post" enctype="multipart/form-data">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Import Consignments</h4>
							<div class="card-toobox">
								<a href="assets/template/import_consignment_1.csv" type='application/octet-stream'>Download Template</a>
							</div>
						</div>
						<div class="card-body">
							<div class="mb-3">
								<input type="hidden" name="csrf" value="<?= uniqid() ?>" />
								<label for="formFile" class="form-label">Select CSV file for import</label>
								<input name="data-file" class="form-control" type="file" id="formFile" accept=".csv">

							</div>
						</div>
						<div class="card-footer">
							<button type="submit" class="btn btn-primary mb-2">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	
<?php $content = ob_get_clean(); ?>
<?php include "theme/admin/layout.php" ?>