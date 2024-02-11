<?php
$bread_crumbs = [
	["text" => "Consignments", "link" => "#"],
	["text" => "View All", "link" => "#", "class" => "active"],
]
?>

<?php ob_start(); ?>

<!-- row -->
<div class="row">
	<div class="col-12">
		<form action="action/update-profile">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Consignments List</h4>
					<div class="card-toolbox">
						<a href="import-consignments" class="btn btn-warning">Import Consignments</a>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table id="example4" class="display table">
							<thead>
								<tr>
									<th>SN</th>
									<th>Internal LRN</th>
									<th>Provider LRN</th>
									<th>Origin</th>
									<th>Destination</th>
									<th>Date</th>
									<th>Updated On</th>
									<th>Status </th>
								</tr>
							</thead>
							<tbody>
								<?php for ($i = 0; $i < 100; $i++) : ?>
									<tr>
										<td><?= ($i + 1) ?></td>
										<td>12345</td>
										<td>54605</td>
										<td>Delhi</td>
										<td>Noida</td>
										<td>2024/04/25</td>
										<td>2024/04/25</td>
										<td><span class="badge light badge-success">Delivered</span></td>
									</tr>
								<?php endfor; ?>

							</tbody>
						</table>
					</div>
				</div>

			</div>
		</form>
	</div>
</div>
<!-- row -->

<?php $content = ob_get_clean(); ?>
<?php include "theme/admin/layout.php" ?>