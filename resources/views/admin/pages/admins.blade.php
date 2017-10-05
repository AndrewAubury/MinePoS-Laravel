@extends("admin.layout")


@section('content')
				<div class="page-header">
					<h3><span class="glyphicon glyphicon-th-list"></span> Admins</h3>
				</div>

				<div class="page-header">
					<ul class="nav nav-tabs minepos-tab">
						<li class="active"><a href="#admins-tab" data-toggle="tab" aria-expanded="true">Admins</a></li>
						<li class=""><a href="#create-admins-tab" data-toggle="tab" aria-expanded="false">Create Admin</a></li>
					</ul>
					<div class="tab-content minepos-tab-content">
						<div class="tab-pane fade active in" id="admins-tab">
							<div class="t table table-striped table-hover">
								<div class="thead">
									<div class="tr">
										<div class="th">ID</div>
										<div class="th">Username</div>
										<div class="th">Email</div>
										<div class="th">Is Super Admin?</div>
										<div class="th">Last Login</div>
										<div class="th">Last IP</div>
									</div>
								</div>
								@include('admin.parts.forms.listadmins')
							</div> 
							<p>Click a row to edit it</p>
						</div>
						<div class="tab-pane minepos-form fade" id="create-admins-tab">
							@include('admin.parts.forms.createadmin')
						</div>
						@foreach(\App\Admin::all() as $admin)
						<div class="tab-pane minepos-modal minepos-form fade" id="{{$admin->id}}">
							@include('admin.parts.forms.editadmin')
						</div>
						@endforeach
					</div>
				</div>
			
@endsection