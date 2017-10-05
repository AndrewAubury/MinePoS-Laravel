<form class="form-horizontal" method="POST" action="/admin/admins/create/">
	{{ csrf_field() }}
	<input name="_method" type="hidden" value="PUT"> 
	<fieldset>
									<div class="form-group">
										<label class="col-md-1 control-label">Username</label>
										<div class="col-md-11">
											<input type="text" name="username" class="form-control" placeholder="PiggyPiglet">
										</div>
									</div>

									<div class="form-group">
										<label class="col-md-1 control-label">Password</label>
										<div class="col-md-11">
											<input type="password" name="password" class="form-control" placeholder="SuperSecurePassword">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-1 control-label">Email</label>
										<div class="col-md-11">
											<input type="text" name="email" class="form-control" placeholder="noreply@piggypiglet.me">			
										</div>
									</div>
									
									<div class="form-group">
										<div class="col-md-11 col-md-offset-1">
											<a data-target="#admins-tab" data-toggle="tab" class="btn btn-default">Cancel</a>
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</div>
								</fieldset>
							</form>