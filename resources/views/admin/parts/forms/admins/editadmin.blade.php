@if($admin->superadmin)
<div class="form-horizontal">
	<fieldset>
		<div class="alert alert-danger">
			You can not edit a superadmins account. 
		</div>
		<div class="form-group">
			<label class="col-md-1 control-label">Username</label>
			<div class="col-md-11">
				<div type="text" class="form-control" value="">{{$admin->username}}</div>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-md-1 control-label">Email</label>
			<div class="col-md-11">
				<div type="text" class="form-control">{{$admin->email}}</div>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-10 col-md-offset-1">
				<a data-target="#admins-tab" data-toggle="tab" class="btn btn-default">Back</a>
			</div>
		</div>
	</fieldset>
</div>

@else

<form class="form-horizontal" method="post" action="/admin/admins/edit/{{$admin->id}}">
	{{ csrf_field() }} 
	<fieldset>
		<div class="form-group">
			<label class="col-md-1 control-label">Username</label>
			<div class="col-md-11">
				<input type="text" name="username" class="form-control" value="{{$admin->username}}">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-1 control-label">Password</label>
			<div class="col-md-11">
				<input type="password" name="password" class="form-control" value="" placeholder="Change Password here">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-1 control-label">Email</label>
			<div class="col-md-11">
				<input type="text" name="email" class="form-control" value="{{$admin->email}}">			
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-10 col-md-offset-1">
				<a data-target="#admins-tab" data-toggle="tab" class="btn btn-default">Cancel</a>
				<button type="submit" class="btn btn-primary">Save</button>
			</form>
			<form method="POST" action="/admin/admins/delete/{{$admin->id}}" style="display: inline;">
				{{ csrf_field() }}
				<input name="_method" type="hidden" value="Delete"> 
				<button type="submit" class="btn btn-danger">Delete</button>
			</form>
		</div>
	</div>
</fieldset>


@endif