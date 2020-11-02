@extends('layouts.admin')
@section('title', 'People')
@section('content')
<div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
	<div class="app-header white bg b-b">
		<div class="navbar" data-pjax>
			<a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
				<i class="ion-navicon"></i>
			</a>
			<div class="navbar-item pull-left h5" id="pageTitle">Create</div>
			<!-- nabar right -->

			<!-- / navbar right -->
		</div>
	</div>
	<div class="app-footer white bg p-a b-t">
		<div class="pull-right text-sm text-muted">Version 1.0.1</div>
		<span class="text-sm text-muted">&copy; Copyright.</span>
	</div>
	<div class="app-body">

		<!-- ############ PAGE START-->
		<div class="padding">

			<div class="row">
				<div class="col-sm-6 offset-sm-3">
					<form action="{{url('admin/people-store')}}" method="post" enctype="multipart/form-data" data-ui-jp="parsley">
						@csrf
						<div class="box">
							<div class="box-header">
								<h2>Add new person</h2>
							</div>
							<div class="box-body">
								<p class="text-muted">Please fill the information to continue</p>
								<div class="">
									<select required class="form-control c-select m-y" name="group">
										<option value="">Please choose Group</option>
										<option value="1">1</option>
										<option value="2">2</option>
									</select>
								</div>
								<div class="form-group">
									<label>Username</label>
									<input type="text" class="form-control" name="name" required>
								</div>

								<div class="form-group">
									<label>Link</label>
									<input type="text" class="form-control" name="link" required>
								</div>
								<div class="form-group">
									<label for="">Description</label>
									<input type="text"  name="description" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Image</label>
									<input type="file"  name="thumbnail" class="form-control">
								</div>

							</div>
							<div class=" p-a text-right">
								<button type="submit" class="btn info">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>

		<!-- ############ PAGE END-->

	</div>
</div>
@endsection