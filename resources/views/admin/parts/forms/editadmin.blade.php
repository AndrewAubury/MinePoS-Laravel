@if($admin->superadmin)
<div class="form-horizontal">
<fieldset>
									<div class="alert alert-danger">
  										You can not edit a superadmins account. 
									</div>
									<div class="form-group">
										<label class="col-md-1 control-label">Username</label>
										<div class="col-md-11">
											<input type="text" class="form-control" readonly disabled value="{{$admin->username}}">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-1 control-label">Email</label>
										<div class="col-md-11">
											<input type="text" class="form-control" readonly disabled value="{{$admin->email}}">			
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

<form class="form-horizontal">
	{{ csrf_field() }} 
								<fieldset>
									<div class="form-group">
										<label class="col-md-1 control-label">Username</label>
										<div class="col-md-11">
											<input type="text" class="form-control" value="{{$admin->username}}">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-1 control-label">Password</label>
										<div class="col-md-11">
											<input type="password" class="form-control" value="" placeholder="Change Password here">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-1 control-label">Email</label>
										<div class="col-md-11">
											<input type="text" class="form-control" value="{{$admin->email}}">			
										</div>
									</div>
									
									<div class="form-group">
										<div class="col-md-10 col-md-offset-1">
											<a data-target="#admins-tab" data-toggle="tab" class="btn btn-default">Cancel</a>
											<a data-target="#admins-tab" data-toggle="tab" class="btn btn-primary">Submit</a>
											<a data-target="#admins-tab" data-toggle="tab" class="btn btn-danger">Delete</a>
										</div>
									</div>
								</fieldset>
							</form>

@endif