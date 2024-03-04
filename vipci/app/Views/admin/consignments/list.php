<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<?php
if ($import_error) :
?>

	<!-- row -->
	<div class="row">
		<div class="col-12">

			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Failed Imports</h4>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="display table table-danger data-table">
							<thead class="thead-danger">
								<tr>

									<th>Internal LRN</th>
									<th>Provider LRN</th>
									<th>Sender</th>
									
									<th>Reveiver</th>
								
									<th>Status </th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($failed_inserts as $data) : ?>
									<tr>

										<td><?= $data[0] ?></td>
										<td><?= $data[1] ?></td>
										<td><?= $data[2] ?>
											<?= $data[3] ?>
											<?= $data[4] ?>
										</td>

										<td><?= $data[6] ?>
										<?= $data[7] ?>
										<?= $data[8] ?>
									</td>
										<td><span class="badge light badge-danger">Failed</span></td>
									</tr>
								<?php endforeach; ?>

							</tbody>
						</table>
					</div>
				</div>

			</div>

		</div>
	</div>
	<!-- row -->

<?php endif; ?>


<!-- row -->
<div class="row">
	<div class="col-12">

		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Consignments</h4>
				<div class="card-toobox">
					
                        <a href="#" class="btn btn-secondary" >All</a>
						<a href="#" class="btn btn-primary" >Picked Up</a>
						<a href="#" class="btn btn-warning" >Manifested</a>
						<a href="#" class="btn btn-success" >Shipped</a>
						<a href="#" class="btn btn-info" >In transit</a>
						<a href="#" class="btn btn-danger" >Delivered</a>
                    </div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table  class="display table data-table">
						<thead>
							<tr>
								<th>In. LRN</th>
								<th>Prv. LRN</th>
								<th>Sender</th>
								
								<th>Receiver</th>
								
								<th>Status </th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($consignments as $data) : ?>
								<tr>
									<td><?= $data["internal_lrn"] ?></td>
									<td><?= $data["provider_lrn"] ?></td>
									<td><?= $data["sender_name"] ?><br>
									<?= $data["sender_phone"] ?><br>
									<?= $data["pickup_location"] ?></td>
									<td><?= $data["receiver_name"] ?><br>
									<?= $data["receiver_phone"] ?><br>
									<?= $data["delivery_location"] ?></td>
									<td><span class="badge light badge-info">In Transit</span></td>
								</tr>
							<?php endforeach; ?>

						</tbody>
					</table>
				</div>
			</div>

		</div>

	</div>
</div>
<!-- row -->



<?= $this->endSection() ?>