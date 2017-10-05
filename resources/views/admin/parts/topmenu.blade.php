<nav class="navbar minepos-navbar navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topnav">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#" id="side-toggle">{{ $_ENV["APP_NAME"] }} Admin</a>
					</div>
					<div class="navbar-collapse collapse" id="topnav">
						<ul class="nav navbar-nav navbar-right">
							@if(Auth::check())
							<li><a data-toggle="modal" data-target="#settings" href="#">User Settings</a></li>
							<li><a data-toggle="modal" data-target="#settings" href="#">MinePoS Settings</a></li>
							@endif						
						</ul>
					</div>
				</div>
			</nav>