<div class="tbody">
	@foreach(\App\Admin::all() as $admin) 
	<a class="tr clickable" data-target="#{{$admin->id}}" data-toggle="tab">
		<div class="td">{{$admin->id}}</div>
		<div class="td">{{$admin->username}}</div>
		<div class="td">{{$admin->email}}</div>
		<div class="td">{{$admin->superadmin ? "Yes" : "No"}}</div>
		<div class="td">{{$admin->last_login->toDayDateTimeString()}}</div>
		<div class="td">{{$admin->last_ip or "Not Logged in yet."}}</div>
	</a>
	@endforeach
</div>