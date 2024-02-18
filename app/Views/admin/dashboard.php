<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>
<!-- row -->
<div class="row">


	<div class="col-xl-3  col-lg-6 col-sm-6">
		<div class="widget-stat card bg-primary">
			<div class="card-body  p-4">
				<div class="media">
					<span class="me-3">
						<i class="la la-users"></i>
					</span>
					<div class="media-body text-white">
						<p class="mb-1">Total Consignments</p>
						<h3 class="text-white">3280</h3>
						<!-- <div class="progress mb-2 bg-secondary">
							<div class="progress-bar progress-animated bg-white" style="width: 80%"></div>
						</div> -->
						<!-- <small>80% Increase in 20 Days</small> -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xl-3  col-lg-6 col-sm-6">
		<div class="widget-stat card bg-info">
			<div class="card-body  p-4">
				<div class="media">
					<span class="me-3">
						<i class="la la-users"></i>
					</span>
					<div class="media-body text-white">
						<p class="mb-1">Pending Pickup</p>
						<h3 class="text-white">3280</h3>
						<!-- <div class="progress mb-2 bg-secondary">
							<div class="progress-bar progress-animated bg-white" style="width: 80%"></div>
						</div> -->
						<!-- <small>80% Increase in 20 Days</small> -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xl-3  col-lg-6 col-sm-6">
		<div class="widget-stat card bg-warning">
			<div class="card-body  p-4">
				<div class="media">
					<span class="me-3">
						<i class="la la-users"></i>
					</span>
					<div class="media-body text-white">
						<p class="mb-1">In Transit</p>
						<h3 class="text-white">3280</h3>
						<!-- <div class="progress mb-2 bg-secondary">
							<div class="progress-bar progress-animated bg-white" style="width: 80%"></div>
						</div> -->
						<!-- <small>80% Increase in 20 Days</small> -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xl-3  col-lg-6 col-sm-6">
		<div class="widget-stat card bg-danger">
			<div class="card-body  p-4">
				<div class="media">
					<span class="me-3">
						<i class="la la-users"></i>
					</span>
					<div class="media-body text-white">
						<p class="mb-1">Delivered</p>
						<h3 class="text-white">3280</h3>
						<!-- <div class="progress mb-2 bg-secondary">
							<div class="progress-bar progress-animated bg-white" style="width: 80%"></div>
						</div> -->
						<!-- <small>80% Increase in 20 Days</small> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- row -->
<div class="row">
	<div class="col-12">
		<form action="action/update-profile">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Upcoming Deliveries</h4>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table id="example4" class="display table">
							<thead>
								<tr>
									<th>In. LRN</th>
									<th>Prv. LRN</th>
									<th>Sender</th>
									<th>Phone</th>
									<th>Origin</th>
									<th>Receiver</th>
									<th>Rec. Phone</th>
									<th>Destination</th>
									<th>Status </th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($consignments as $key => $data) : ?>
									<tr>
									<tr>
										<td><?= $data["internal_lrn"] ?></td>
										<td><?= $data["provider_lrn"] ?></td>
										<td><?= $data["sender_name"] ?></td>
										<td><?= $data["sender_phone"] ?></td>
										<td><?= $data["pickup_location"] ?></td>
										<td><?= $data["receiver_name"] ?></td>
										<td><?= $data["receiver_phone"] ?></td>
										<td><?= $data["delivery_location"] ?></td>
										<td><span class="badge light badge-info">In Transit</span></td>
									</tr>
									</tr>
								<?php endforeach; ?>

							</tbody>
						</table>
					</div>
				</div>

			</div>
		</form>
	</div>
</div>
<!-- row -->

<?= $this->endSection() ?>