<div id="settings" class="modal minepos-modal minepos-form-modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Settings</h4>
			</div>
			<div class="modal-body">
				<ul class="nav nav-tabs minepos-tab-modal" id="settings">
					<li class="active"><a href="#user-settings" data-toggle="tab" aria-expanded="true">User Settings</a></li>
					<li class=""><a href="#minepos-settings" data-toggle="tab" aria-expanded="false">MinePoS Settings</a></li>
				</ul>
				<div class="tab-content minepos-tab-content-modal">
					@include('admin.parts.forms.usersettings')
					@include('admin.parts.forms.minepossettings')
				</div>
			</div>
			<div class="modal-footer">
				
			</div>
		</div>
	</div>
</div>