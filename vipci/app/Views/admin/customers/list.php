<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<!-- row -->
<div class="row">
	<div class="col-12">

		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Customers</h4>
				<div class="card-toobox">
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="display table data-table">
						<thead>
							<tr>
								<th>S.N.</th>
								<th>Name</th>
								<th>Phone</th>
								<th>Consignments</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data as $key => $customer) : ?>
								<tr>
									<td><?=($key+1)?></td>
									<td><?=$customer->sender_name?></td>
									<td><?=$customer->sender_phone?></td>
									<td><?=$customer->consignments?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>

		</div>

	</div>
</div>
<!-- row --


<?= $this->endSection() ?>