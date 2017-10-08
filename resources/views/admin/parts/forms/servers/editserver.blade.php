<form class="form-horizontal" method="post" action="/admin/servers/edit/{{$server->id}}">
	{{ csrf_field() }} 
	<fieldset>
		<div class="form-group">
			<label class="col-md-1 control-label">Name</label>
			<div class="col-md-11">
				<input type="text" name="name" class="form-control" value="{{$server->name}}">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-1 control-label">API Key</label>
			<div class="col-md-11">
				<div class="form-control">{{$server->api_key}}</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-1 control-label">Enabled</label>
			<div class="col-md-11">
				<label class="switch">
					<input type="checkbox" name="enabled" {{$server->enabled ? "checked" : ""}}>
					<span class="slider round"></span>
				</label>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-1 control-label">Reset API Key</label>
			<div class="col-md-11">
				<label class="switch">
					<input type="checkbox" name="resetkey">
					<span class="slider round"></span>
				</label>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-10 col-md-offset-1">
				<a data-target="#servers-tab" data-toggle="tab" class="btn btn-default">Cancel</a>
				<button type="submit" class="btn btn-primary">Save</button>
			</form>
			<form method="POST" action="/admin/servers/delete/{{$server->id}}" style="display: inline;">
				{{ csrf_field() }}
				<input name="_method" type="hidden" value="Delete"> 
				<button type="submit" class="btn btn-danger">Delete</button>
			</form>
		</div>
	</div>
</fieldset>