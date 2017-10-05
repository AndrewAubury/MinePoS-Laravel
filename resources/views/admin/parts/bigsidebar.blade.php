<div id="sidebar-wrapper" data-spy="affix">
			<ul class="sidebar">
				<li class=""><a href="{{url('/admin/')}}"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
				<li>
					<a href="#" data-toggle="collapse" data-target="#packages" data-parent="#sidebar-wrapper" class="collapsed">
						<span class="glyphicon glyphicon-folder-open"></span> Packages <span class="glyphicon glyphicon-menu-down"></span>
					</a>
					<div class="collapse" id="packages" style="height: 0px;">
						<ul class="nav nav-list">
							<li><a href="packages.php#create-packages-tab">Create Package</a></li>
							<li><a href="packages.php#packages-tab">Manage Packages</a></li>
						</ul>
					</div>
				</li>
				<li>
					<a href="#" data-toggle="collapse" data-target="#categories" data-parent="#sidebar-wrapper" class="collapsed">
						<span class="glyphicon glyphicon-th-large"></span> Categories <span class="glyphicon glyphicon-menu-down"></span>
					</a>
					<div class="collapse" id="categories" style="height: 0px;">
						<ul class="nav nav-list">
							<li><a href="categories.php#create-categories-tab">Create Category</a></li>
							<li><a href="categories.php#categories-tab">Manage Categories</a></li>
						</ul>
					</div>
				</li>
				<li>
					<a href="#" data-toggle="collapse" data-target="#coupons" data-parent="#sidebar-wrapper" class="collapsed">
						<span class="glyphicon glyphicon-tags"></span>  Coupons <span class="glyphicon glyphicon-menu-down"></span>
					</a>
					<div class="collapse" id="coupons" style="height: 0px;">
						<ul class="nav nav-list">
							<li><a href="coupons.php#create-coupons-tab">Create Coupon</a></li>
							<li><a href="coupons.php#coupons-tab">Manage Coupons</a></li>
						</ul>
					</div>
				</li>
				<li>
					<a href="#" data-toggle="collapse" data-target="#payments" data-parent="#sidebar-wrapper" class="collapsed">
						<span class="glyphicon glyphicon-credit-card"></span> Payments <span class="glyphicon glyphicon-menu-down"></span>
					</a>
					<div class="collapse" id="payments" style="height: 0px;">
						<ul class="nav nav-list">
							<li><a href="orders.php">Orders</a></li>
							<li><a href="payments.php">Payments</a></li>
							<li><a href="awaiting.php">Awaiting</a></li>
						</ul>
					</div>
				</li>
				<li>
					<a href="#" data-toggle="collapse" data-target="#servers" data-parent="#sidebar-wrapper" class="collapsed">
						<span class="glyphicon glyphicon-hdd"></span> Servers <span class="glyphicon glyphicon-menu-down"></span>
					</a>
					<div class="collapse" id="servers" style="height: 0px;">
						<ul class="nav nav-list">
							<li><a href="{{url('/admin/servers')}}#create-servers-tab">Create Serve</a></li>
							<li><a href="{{url('/admin/servers')}}#servers-tab">Manage Servers</a></li>
						</ul>
					</div>
				</li>
				<li>
					<a href="#" data-toggle="collapse" data-target="#admins" data-parent="#sidebar-wrapper" class="collapsed">
						<span class="glyphicon glyphicon-user"></span> Admins <span class="glyphicon glyphicon-menu-down"></span>
					</a>
					<div class="collapse" id="admins" style="height: 0px;">
						<ul class="nav nav-list">
							<li><a href="{{url('/admin/admins')}}#create-admins-tab">Create Admin Account	</a></li>
							<li><a href="{{url('/admin/admins')}}#admins-tab">Manage Admins</a></li>
						</ul>
					</div>
				</li>
				@if (Auth::check())
  					<li><a href="{{url('/admin/logout')}}"><span class="glyphicon glyphicon-log-out"></span> Logout ({{ Auth::user()->username }})</a></li>
				@else
				<li><a href="#" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-out"></span> Login</a></li>
				@endif
			</ul>
		</div>