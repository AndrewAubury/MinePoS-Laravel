<form method="POST" action="/admin/login/" id="login" class="modal minepos-modal minepos-form fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Login</h4>
				</div>
				<div class="modal-body">
					<form class="form-horizontal">
						{{ csrf_field() }} 
						<fieldset>
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
							<div class="form-group">
								<label class="col-md-2 control-label">Username</label>
								<div class="col-md-10">
									<input type="text" name="username" class="form-control" placeholder="username">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Password</label>
								<div class="col-md-10">
									<input type="password" name="password" class="form-control" placeholder="password">
								</div>
							</div>
						</fieldset>
					</form>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn minepos-btn">Login</button>
				</div>
			</div>
		</div>
	</form>
	<script>
		setTimeout(function(){
$("#login").modal({
			show : true,
			backdrop : "static",
			keyboard: false
		});
		$("#login").draggable({
			handle: "#login"
		});

		},0);
		
	</script>