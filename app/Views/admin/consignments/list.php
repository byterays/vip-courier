<?= $this->extend('admin/layout') ?>

<?= $this->section('content') ?>

<?php 
	if($import_error):
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
						<table id="example4" class="display table table-danger ">
							<thead class="thead-danger">
								<tr>
									
									<th>Internal LRN</th>									
									<th>Provider LRN</th>
									<th>Sender</th>
									<th>Phone</th>
									<th>Origin</th>
									<th>Reveiver</th>
									<th>Phone</th>
									<th>Destination</th>
									<th>Status </th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($failed_inserts as $data) : ?>
									<tr>
										
										<td><?=$data[0]?></td>
										<td><?=$data[1]?></td>
										<td><?=$data[2]?></td>
										<td><?=$data[3]?></td>
										<td><?=$data[4]?></td>
										
										<td><?=$data[6]?></td>
										<td><?=$data[7]?></td>
										<td><?=$data[8]?></td>
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
								<?php foreach ($consignments as $data) : ?>
									<tr>										
										<td><?=$data["internal_lrn"]?></td>
										<td><?=$data["provider_lrn"]?></td>
										<td><?=$data["sender_name"]?></td>
										<td><?=$data["sender_phone"]?></td>
										<td><?=$data["pickup_location"]?></td>
										<td><?=$data["receiver_name"]?></td>
										<td><?=$data["receiver_phone"]?></td>
										<td><?=$data["delivery_location"]?></td>										
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