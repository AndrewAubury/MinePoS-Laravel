@extends('admin.layout')

@section('content')

<div class="page-header">
	<h3><span class="glyphicon glyphicon-th-list"></span> Home</h3>
</div>
<div class="row">
	<div class="col-sm-12 col-md-6">
		<div class="panel panel-home">
			<div class="panel-heading clickable" data-toggle="collapse" data-target="#packages-panel">
				<p class="panel-title">Packages<span class="glyphicon glyphicon-menu-down pull-right"></span></p>
			</div>
			<!-- extra div to fix https://github.com/twbs/bootstrap/issues/12093 -->
			<div id="packages-panel" class="collapse">
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-6">
							<center><a href="packages.php#create-packages-tab" class="home-text"><span class="glyphicon glyphicon-folder-open home-icon"></span><br>Create Package</a></center>
						</div>
						<div class="col-sm-6">
							<center><a href="packages.php#packages-tab" class="home-text"><span class="glyphicon glyphicon-folder-open home-icon"></span><br>Manage Packages</a></center>
						</div>
					</div>
				</div>
			</div>
		</div>  
	</div>
	<div class="col-sm-12 col-md-6">
		<div class="panel panel-home">
			<div class="panel-heading clickable" data-toggle="collapse" data-target="#categories-panel">
				<p class="panel-title">Categories<span class="glyphicon glyphicon-menu-down pull-right"></span></p>
			</div>
			<!-- extra div to fix https://github.com/twbs/bootstrap/issues/12093 -->
			<div id="categories-panel" class="collapse">
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-6">
							<center><a href="categories.php#create-categories-tab" class="home-text"><span class="glyphicon glyphicon-th-large home-icon"></span><br>Create Category</a></center>
						</div>
						<div class="col-sm-6">
							<center><a href="categories.php#categories-tab" class="home-text"><span class="glyphicon glyphicon-th-large home-icon"></span><br>Manage Categories</a></center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12 col-md-6">
		<div class="panel panel-home">
			<div class="panel-heading clickable" data-toggle="collapse" data-target="#coupons-panel">
				<p class="panel-title">Coupons<span class="glyphicon glyphicon-menu-down pull-right"></span></p>
			</div>
			<!-- extra div to fix https://github.com/twbs/bootstrap/issues/12093 -->
			<div id="coupons-panel" class="collapse">
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-6">
							<center><a href="coupons.php#create-coupons-tab" class="home-text"><span class="glyphicon glyphicon-tags home-icon"></span><br>Create Coupon</a></center>
						</div>
						<div class="col-sm-6">
							<center><a href="coupons.php#coupons-tab" class="home-text"><span class="glyphicon glyphicon-tags home-icon"></span><br>Manage Coupons</a></center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-6">
		<div class="panel panel-home">
			<div class="panel-heading clickable" data-toggle="collapse" data-target="#payments-panel">
				<p class="panel-title">Payments<span class="glyphicon glyphicon-menu-down pull-right"></span></p>
			</div>
			<!-- extra div to fix https://github.com/twbs/bootstrap/issues/12093 -->
			<div id="payments-panel" class="collapse">
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-4">
							<center><a href="orders.php" class="home-text"><span class="glyphicon glyphicon-shopping-cart home-icon"></span><br>Orders</a></center>
						</div>
						<div class="col-sm-4">
							<center><a href="payments.php" class="home-text"><span class="glyphicon glyphicon-credit-card home-icon"></span><br>Payments</a></center>
						</div>
						<div class="col-sm-4">
							<center><a href="awaiting.php" class="home-text"><span class="glyphicon glyphicon-send home-icon"></span><br>Awaiting</a></center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12 col-md-6">
		<div class="panel panel-home">
			<div class="panel-heading clickable" data-toggle="collapse" data-target="#servers-panel">
				<p class="panel-title">Servers<span class="glyphicon glyphicon-menu-down pull-right"></span></p>
			</div>
			<!-- extra div to fix https://github.com/twbs/bootstrap/issues/12093 -->
			<div id="servers-panel" class="collapse">
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-6">
							<center><a href="servers.php#create-servers-tab" class="home-text"><span class="glyphicon glyphicon-hdd home-icon"></span><br>Create Server</a></center>
						</div>
						<div class="col-sm-6">
							<center><a href="servers.php#servers-tab" class="home-text"><span class="glyphicon glyphicon-hdd home-icon"></span><br>Manage Servers</a></center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-6">
		<div class="panel panel-home">
			<div class="panel-heading clickable" data-toggle="collapse" data-target="#admins-panel">
				<p class="panel-title">Admins<span class="glyphicon glyphicon-menu-down pull-right"></span></p>
			</div>
			<!-- extra div to fix https://github.com/twbs/bootstrap/issues/12093 -->
			<div id="admins-panel" class="collapse">
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-6">
							<center><a href="admins.php#create-admins-tab" class="home-text"><span class="glyphicon glyphicon-user home-icon"></span><br>Create Admin</a></center>
						</div>
						<div class="col-sm-6">
							<center><a href="admins.php#admins-tab" class="home-text"><span class="glyphicon glyphicon-user home-icon"></span><br>Manage Admins</a></center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection