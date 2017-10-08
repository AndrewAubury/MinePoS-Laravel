<?php
if (!function_exists('menuActiveRoute')) {
    function menuActiveRoute($routeName, $includeClass = true, $className = 'active') {
        $activeClass = ($includeClass ? "class=\"{$className}\"": $className);
        return preg_match('/^' . preg_quote($routeName, '/') . '/', \Request::route()->getName()) ? $activeClass: '';
    }
}
?>
<!DOCTYPE html>
<html>
	@include('admin.parts.head')
	<body>
		<div id="wrapper" class="sidebar-displayed">
			@include('admin.parts.bigsidebar')
			@include('admin.parts.smallsidebar')
			<div id="content-wrapper">
				@include('admin.parts.topmenu')
				<div class="container-fluid">
					@if (session('good'))
						<div class="alert alert-success">
							{{ session('good') }}
						</div>
					@endif
					
					@if (session('bad'))
						<div class="alert alert-danger">
							{{ session('bad') }}
						</div>
					@endif
					@yield('content')
				</div>
			</div>
		</div>	
		@if (Auth::check())
		@include('admin.parts.settings')
		@else
		@include('admin.parts.loginform')
		@endif

		@include('admin.parts.javascript')
	</body>
</html>	