<?php ini_set('display_errors', 1); ?> 
<?php

require_once "config/init.php";
require_once "config/database.php";


$bread_crumbs = [
	["text" => "Consignments", "link" => "#", "class"=>""],
	["text" => "View All", "link" => "#", "class" => "active"],
];



$host = $config["database"]["host"];
$db = $config["database"]["db"];
$db_user = $config["database"]["user"];
$db_password = $config["database"]["password"];
$con = new PDO("mysql:host={$host};dbname={$db}", $db_user, $db_password);


 $stmt = $con->prepare("select lrn_lookup.internal_lrn, lrn_lookup.`provider_lrn`, lrn_lookup.`provider`, lrn_lookup.`date_created`,  lrn_lookup.`updated_on`,
 consignment.`order_date`,consignment.`sender_name`, consignment.`sender_phone`,consignment.`pickup_date`, consignment.`pickup_location`, 
 consignment.`receiver_name`, consignment.`receiver_phone`, consignment.`delivery_location`, 
 consignment.`delivery_date`, consignment.`status`  from lrn_lookup 
 inner join consignment  on  lrn_lookup.`internal_lrn`=consignment.`lrn`
 order by lrn_lookup.`updated_on` desc, lrn_lookup.`date_created` desc");
 $stmt->execute();
 $consignments = $stmt->fetchAll();

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
									<th>Delivery Date</th>
									<th>Updated On</th>
									<th>Status </th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($consignments as $data): ?>
									<tr>
										<td></td>
										<td><?=$data["internal_lrn"]?></td>
										<td><?=$data["provider_lrn"]?></td>
										<td>
												<?=$data["sender_name"] ?><br/>
												<?=$data["sender_phone"] ?><br/>
												<?=$data["pickup_location"] ?>
										</td>
										<td>
												<?=$data["receiver_name"] ?><br/>
												<?=$data["receiver_phone"] ?><br/>
												<?=$data["delivery_location"] ?>
										</td>
										<td><?=$data["order_date"]?></td>
										<td><?=$data["delivery_date"]?></td>
										<th><?=$data["updated_on"]?></th>
										<td><span class="badge light badge-success"><?=$data["status"]?></span></td>
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

<?php $content = ob_get_clean(); ?>
<?php include "theme/admin/layout.php" ?>