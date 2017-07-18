@extends("../layout/master")


@section("title")
	{{ $title }}
@endsection


@section("addtask_panel")
	<div class="col-lg-6 col-lg-offset-3">
		<div class="panel panel-default ">
			<div class="panel-heading">Update Task</div>
			<div class="panel-body">
				<form method="POST" action='{{ url("/home/edit/$task->id") }}'>
					{{ csrf_field() }}
					<div class="row">
				  		<div class="col-lg-3 text-right">
						  	<span>Task</span>
						</div>
				  		<div class="col-lg-4">
				  			<div class="form-group">
				  				<input type="text" name="name" value="{!! $task->name !!}" class="form-control"></input>
				  			</div>
						  	<button type="submit" class="btn btn-primary">
									Update Task
							</button>							
						</div>
						<div class="col-lg-5">
				  			<div class="form-group">
				  				<input type="text" name="description" value="{!! $task->description !!}" class="form-control"></input>
				  			</div>
				  			<a href="\home">
							<button type="submit" class="btn btn-info">
									Back
							</button>
							</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection

@extends('layouts.app')
