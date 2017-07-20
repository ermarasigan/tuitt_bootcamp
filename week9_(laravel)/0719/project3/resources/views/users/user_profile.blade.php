@extends("../layout/master")


@section("title")
	{{ $title }}
@endsection

@section("current_panel")
	<div class="row" style="margin: 0 auto">
		<div class="col-lg-4 col-lg-offset-4">
			<div class = "panel panel-default">
				<div class="panel-body">

					<div class="text-center">{{ $user->name }}</div>
					<figure class="text-center">
						<img style="border-radius: 20px" src="{{ $user->avatar }}">
					</figure>
					@if(Auth::user()->id != $user->id && !$connections->contains($user->id))
					<form method="POST" action='{{ url("/home/add/$user->id") }}' class="text-center" style="margin-top: 10px;">
						{{ csrf_field() }}
						{{-- @if(!$ispend) --}}
					      <button type="submit" class="btn btn-default">Add to Friend</button>
					      <input type="hidden" name="from_user" value={{Auth::user()->id}}></input>
					      <input type="hidden" name="to_user" value={{$user->id}}></input>
					    {{-- @endif --}}
					</form>
					@endif
				</div>

				<div class="panel-footer text-center">
					<a href='{{ url("/home") }}'>Home</a>
				</div>
			</div>
		</div>
	</div>
	@foreach($pendings as $pending)
		@if(Auth::user() && Auth::user()->id == $pending->to_user)

		
			<div class="panel panel-default" style="width: 220; float: left; margin: 10px">

				<h3 class="text-center">Pending Request</h3>

				<div class="panel-body">
					<div class="text-center">{{ $pending->name }}</div>
					<img style="border-radius: 20px;" src="{{ $pending->avatar }}">
					
					<form method="POST" action='{{ url("/home/confirm/$user->id") }}' class="text-center" style="margin-top: 10px;">
						{{ csrf_field() }}
					      <button type="submit" class="btn btn-default">Confirm</button>
					      <input type="hidden" name="from_user" value={{$pending->id}}></input>
					      <input type="hidden" name="to_user" value={{Auth::user()->id}}></input>
					</form>
					<form method="POST" action='{{ url("/home/delete/$user->id") }}' class="text-center" style="margin-top: 10px;">
						{{ csrf_field() }}
					      <button type="submit" class="btn btn-default">Delete</button>
					      <input type="hidden" name="from_user" value={{$pending->id}}></input>
					      <input type="hidden" name="to_user" value={{Auth::user()->id}}></input>
					</form>
					
				</div>
			</div>
		@endif
	@endforeach
	@foreach($approveds as $approved)
		@if(Auth::user() && Auth::user()->id == $approved->to_user)

			<div class="panel panel-default" style="width: 220; float: left; margin: 10px">

				<h3 class="text-center">Approved Friend</h3>

				<div class="panel-body">
					<div class="text-center">{{ $approved->name }}</div>
					<img style="border-radius: 20px;" src="{{ $approved->avatar }}">
					
					<form method="POST" action='{{ url("/home/delete/$user->id") }}' class="text-center" style="margin-top: 10px;">
						{{ csrf_field() }}
					      <button type="submit" class="btn btn-default">Delete</button>
					      <input type="hidden" name="from_user" value={{$approved->id}}></input>
					      <input type="hidden" name="to_user" value={{Auth::user()->id}}></input>
					</form>
					
				</div>
			</div>
		@endif
	@endforeach
@endsection

@extends('layouts.app')