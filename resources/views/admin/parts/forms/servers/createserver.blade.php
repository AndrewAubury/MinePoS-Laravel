<form class="form-horizontal" method="POST" action="/admin/servers/create/">
	{{ csrf_field() }}
	<input name="_method" type="hidden" value="PUT"> 
	<fieldset>
									<div class="form-group">
										<label class="col-md-1 control-label">Name</label>
										<div class="col-md-11">
											<input type="text" name="name" class="form-control" placeholder="Survival">
										</div>
									</div>

									<div class="form-group">
										<div class="col-md-11 col-md-offset-1">
											<a data-target="#servers-tab" data-toggle="tab" class="btn btn-default">Cancel</a>
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</div>
								</fieldset>
							</form>	