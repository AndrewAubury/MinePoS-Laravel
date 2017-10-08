<div class="tbody">
	@foreach(\App\Server::all() as $server) 
	<a class="tr clickable" data-target="#{{$server->id}}" data-toggle="tab">
		<div class="td">{{$server->id}}</div>
		<div class="td">{{$server->name}}</div>
		<div class="td">{{$server->enabled ? "Yes" : "No"}}</div>
	</a>
	@endforeach
</div>