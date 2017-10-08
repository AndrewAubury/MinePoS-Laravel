<div class="tab-pane fade active in" id="user-settings">
	<form class="form-horizontal" method="post" action="/admin/profile/update/">
		{{ csrf_field() }}
		<fieldset>
			<div class="form-group">
				<label class="col-md-12 control-label">Email</label>
				<label class="col-md-2 control-label">Current Email</label>
				<div class="col-md-10">
					<div type="email" class="form-control" placeholder="noreply@piggypiglet.me">{{ Auth::user()->email }}</div>
				</div>
				<label class="col-md-2 control-label">New Email</label>
				<div class="col-md-10">
					<input type="email" class="form-control" name="email" placeholder="enquiries@piggypiglet.me">
				</div>
				<label class="col-md-2 control-label">Confirm Email</label>
				<div class="col-md-10">
					<input type="email" class="form-control" name="emailConf" placeholder="enquiries@piggypiglet.me">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-12 control-label">Password</label>
				<label class="col-md-2 control-label">Current Password</label>
				<div class="col-md-10">
					<input type="password" id="password name="password" class="form-control" placeholder="*****">
					<button type="button" class="btn minepos-btn" onclick="if(password.type=='text')password.type='password'; else password.type='text';">Show Pass</button>
				</div>
				<label class="col-md-2 control-label">New Password</label>
				<div class="col-md-10">
					<input type="password" id="passwordn" class="form-control" placeholder="********************">
					<button type="button" class="btn minepos-btn" name="newPassword" onclick="if(passwordn.type=='text')passwordn.type='password'; else passwordn.type='text';">Show Pass</button>
				</div>
				<label class="col-md-2 control-label">Confirm Password</label>
				<div class="col-md-10">
					<input type="password" id="passwordc" name="newPasswordConf" class="form-control" placeholder="********************">
					<button type="button" class="btn minepos-btn" onclick="if(passwordc.type=='text')passwordc.type='password'; else passwordc.type='text';">Show Pass</button>
				</div>
			</div>
		</fieldset>
		<button type="submit" class="btn minepos-btn">Submit</button>
	</form>
</div>