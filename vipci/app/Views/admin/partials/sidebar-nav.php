<!--**********************************
Sidebar start
*********************************** -->
<div class="deznav">
	<div class="deznav-scroll">
		<ul class="metismenu" id="menu">
			<li><a href="<?= route_to("dashboard") ?>" class="" aria-expanded="false">
					
					<div class="nav-text"><i class="fa-solid fa-gauge fa-lg"></i> Dashboard</div>
				</a>
			</li>
			<li><a class="has-arrow " href="javascript:void(0)" aria-expanded="false">
					
					<span class="nav-text"><i class="fa-solid fa-truck-fast fa-lg"></i> Consignments</span>
				</a>
				<ul aria-expanded="false">
					<li><a href="<?= route_to("consignments.import") ?>">Import</a></li>
					<li><a href="#">Add New</a></li>
					<li><a href="<?= route_to("consignments.list") ?>">View All</a></li>
				
				</ul>
			</li>
			<li><a class="has-arrow " href="javascript:void(0)" aria-expanded="false">
					
					<span class="nav-text"><i class="fa-solid fa-users fa-lg"></i> Customers</span>
				</a>
				<ul aria-expanded="false">					
					<li><a href="#">Add New</a></li>
					<li><a href="<?= route_to("customers.list") ?>">List All</a></li>
				</ul>
			</li>
			
			
		</ul>
		<div class="help-desk">
			<a href="#" class="btn btn-primary">Help Desk</a>
		</div>
	</div>
</div>

<!--**********************************
            Sidebar end
***********************************-->