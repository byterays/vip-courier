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
					<div class="menu-icon">
						<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M6.75713 9.35157V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M11.0349 6.34253V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M15.2428 12.6746V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
							<path fill-rule="evenodd" clip-rule="evenodd" d="M15.2952 1.83333H6.70474C3.7103 1.83333 1.83331 3.95274 1.83331 6.95306V15.0469C1.83331 18.0473 3.70157 20.1667 6.70474 20.1667H15.2952C18.2984 20.1667 20.1666 18.0473 20.1666 15.0469V6.95306C20.1666 3.95274 18.2984 1.83333 15.2952 1.83333Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</div>
					<span class="nav-text">Consignments</span>
				</a>
				<ul aria-expanded="false">
					<li><a href="<?= route_to("consignments.import") ?>">Import</a></li>
					<li><a href="#">Add New</a></li>
					<li><a href="<?= route_to("consignments.list") ?>">View All</a></li>
				</ul>
			</li>
			<li><a href="#" >
					<span class="fa-solid fa-users"></span>
					<span class="nav-text">Customers</span>
				</a>
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