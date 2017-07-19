@extends("../layout/master")


@section("title")
	{{ $title }}
@endsection

@section("current_panel")
	@foreach($users as $user)
		<div class="panel panel-default" style="width: 220; float: left; margin: 10px">

			<div class="panel-body">
				<img style="border-radius: 20px;" src="{{ $user->avatar }}">
			</div>

			<div class="panel-footer text-center">
				<a href='{{ url("/home/profile/$user->id") }}'>{{ $user->name }}</a>
			</div>

		</div>
	@endforeach
@endsection

@extends('layouts.app')
