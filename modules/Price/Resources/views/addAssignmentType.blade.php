@extends('admin::home')
@section('body')
	<div class="row">
        <div class="col-xs-12">
	       <div class="row-fluid">
		        <div class="span6 ">
		          <h2>Add Assignment Type</h2>
		        </div>
		        <div class="span6">
		          <ul class="breadcrumb pull-right">
		            <li><a href="{{url('admin')}}">Admin</a> <span class="divider">/</span></li>
		            <li class="active">Add Assignment Type</li>
		          </ul>
		        </div>
	      </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Add</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="post" action="{{ url('/price/assignment/add') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Parent</label>
							<div class="col-md-6">
								<select name="parent_id" class="form-control">
									<option value="0">none</option>
									
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Status</label>
							<div class="col-md-6">
								<select name="status" class="form-control">
									<option value='1'>Active</option>
									<option value="2">Inactive</option>
								</select>
							</div>
						</div>

						

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Submit</button>

								
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection