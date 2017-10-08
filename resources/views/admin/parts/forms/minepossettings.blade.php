<div class="tab-pane fade in" id="minepos-settings">
	<form class="form-horizontal">
		<fieldset>
			<div class="form-group">
				<label class="col-md-12 control-label">Website</label>
				<label class="col-md-2 control-label">Name</label>
				<div class="col-md-10">
					<input type="text" class="form-control" placeholder="WickedCubeMC">
				</div>
				<label class="col-md-2 control-label">Description</label>
				<div class="col-md-10">
					<input type="text" class="form-control" placeholder="WickedCubeMC's Store">
				</div>
				<label class="col-md-2 control-label">Favicon</label>
				<div class="col-md-10">
					<input type="url" class="form-control" placeholder="https://www.wickedcubemc.com/favicon.png">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-12 control-label">Email</label>
				<label class="col-md-2 control-label">Incoming</label>
				<div class="col-md-10">
					<input type="email" class="form-control" placeholder="spam@wickedcubemc.com">
				</div>
				<label class="col-md-2 control-label">Outgoing</label>
				<div class="col-md-10">
					<input type="email" class="form-control" placeholder="noreply@wickedcubemc.com">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-12 control-label">SMTP</label>
				<label class="col-md-2 control-label">Host</label>
				<div class="col-md-10">
					<input type="text" class="form-control" placeholder="mail.wickedcubemc.com">
				</div>
				<label class="col-md-2 control-label">Port</label>
				<div class="col-md-10">
					<input type="text" class="form-control" placeholder="587">
				</div>
				<label class="col-md-2 control-label">Security</label>
				<div class="col-md-10">
					<select class="form-control" id="sec">
						<option>STARTTLS</option>
						<option>SSL/TLS</option>
						<option>No Encryption</option>
					</select>
				</div>
				<label class="col-md-2 control-label">Auth method</label>
				<div class="col-md-10">
					<select class="form-control" id="sec">
						<option>Normal Password</option>
						<option>Encrypted Password</option>
						<option>Kerberos / GSSAPI</option>
						<option>NTLM</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-12 control-label">MC</label>
				<label class="col-md-2 control-label">Command</label>
				<div class="col-md-10">
					<input type="text" class="form-control disabled" placeholder="/minepos auth 9992jdisakkk32d990102ikdok2mjj1dsaio20">
				</div>
				<label class="col-md-2 control-label">Auth</label>
				<div class="col-md-10">
					<input type="text" class="form-control" placeholder="true">
					<span class="help-block">Whether or not to check usernames against mojang, set to false if not in online mode.</span>
				</div>
			</div>
		</fieldset>
	</form>
</div>