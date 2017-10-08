@extends("admin.layout")


@section('content')
				<div class="page-header">
					<h3><span class="glyphicon glyphicon-hdd"></span> Servers</h3>
				</div>

				<div class="page-header">
					<ul class="nav nav-tabs minepos-tab">
						<li class="active"><a href="#servers-tab" data-toggle="tab" aria-expanded="true">Servers</a></li>
						<li class=""><a href="#create-servers-tab" data-toggle="tab" aria-expanded="false">Create Servers</a></li>
					</ul>
					<div class="tab-content minepos-tab-content">
						<div class="tab-pane fade active in" id="servers-tab">
							<div class="t table table-striped table-hover">
								<div class="thead">
									<div class="tr">
										<div class="th">ID</div>
										<div class="th">Server Name</div>
										<div class="th">Enabled</div>
										
									</div>
								</div>
								@include('admin.parts.forms.servers.listserver')
							</div> 
							<p>Click a row to edit it</p>
						</div>
						<div class="tab-pane minepos-form fade" id="create-servers-tab">
							@include('admin.parts.forms.servers.createserver')
						</div>
						@foreach(\App\Server::all() as $server)
						<div class="tab-pane minepos-modal minepos-form fade" id="{{$server->id}}">
							@include('admin.parts.forms.servers.editserver')
						</div>
						@endforeach
					</div>
				</div>
			
@endsection