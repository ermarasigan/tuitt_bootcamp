@extends("../layout/master")


@section("title")
	{{ $title }}
@endsection


@section("addtask_panel")
	@if(Session::has('message'))
		<div class="alert alert-success text-center">{{ Session::get('message') }}</div>
	@endif
	<div class="col-lg-6 col-lg-offset-3">
		<div class="panel panel-default ">
			<div class="panel-heading">New Task</div>
			<div class="panel-body">
				<form method="POST" action="{{ url('/create') }}">
					{{ csrf_field() }}
					<div class="row">
				  		<div class="col-lg-3 text-right">
						  	<span>Task</span>
						</div>
				  		<div class="col-lg-4">
				  			<div class="form-group">
				  				<input type="text" name="name" placeholder="Task name" class="form-control"></input>
				  			</div>
				  			@if(Auth::user() && Auth::user()->role == 'admin')
						  	<button type="submit" class="btn btn-primary">
									Add Task
							</button>
							@endif
						</div>
						<div class="col-lg-5">
				  			<div class="form-group">
				  				<input type="text" name="description" placeholder="Task description" class="form-control"></input>
				  			</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection


@section("currenttask_panel")
	<div class="col-lg-6 col-lg-offset-3">
		<div class="panel panel-default ">
			<div class="panel-heading">Current Tasks</div>
			<div class="panel-body">
				<table class="table table-striped">
				    <thead>
				    	<tr>
				    		<th>Name</th>
				    		<th>Description</th>
				    		<th></th>
				    	</tr>
				    </thead>
				    <tbody>
				    	@foreach($tasks as $task)
						<tr>
				        	<td>{!! $task->name !!}</td>
				        	<td>{!! $task->description !!}</td>
					        <td>
					  			@if(Auth::user() && Auth::user()->role == 'admin')
					        	<a href='{{ url("/home/edit/$task->id") }}'><button class="btn btn-warning">Edit</button></a>
								<a href='{{ url("/home/delete/$task->id") }}'><button class="btn btn-danger">Delete</button></a>
								@endif
							</td>
				    	</tr>
				    	@endforeach
				    </tbody>
				</table>
			</div>
		</div>
	</div>
@endsection

	{{-- <ul>

		@foreach($tasks as $task)
		<a href='{{ url("/home/$task->id") }}'>
			<li>
				{{ $task->name}}  {{ $task->description }} <br>
			</li>
		</a>
			@foreach($task->comments as $comment)
				<div class="row">
					<div class="col-xs-2">
					</div>
					<div class="col-xs-10">
						{{ $comment->content }} {{ $comment->updated_at }}	
					</div>
				</div>
			@endforeach
		<div>
			<a href='{{ url("/home/edit/$task->id") }}'><button class="btn btn-warning">Edit</button></a>
			<a href='{{ url("/home/delete/$task->id") }}'><button class="btn btn-danger">Delete</button></a>
		</div>
		@endforeach
	</ul> --}}

@extends('layouts.app')
