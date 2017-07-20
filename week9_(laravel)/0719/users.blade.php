<!DOCTYPE html>
<html lang="en">
<head>
  <title>USERS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
@if(Session::has('message'))
    <div class="alert alert-success">{{ Session::get('message') }}</div>
@endif
	<!-- Trigger the modal with a button -->
	<div class="row">
		<div class="col-xs-6">
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#friendrequests">Friend Requests {{count($pending_requests)}}</button>
		</div>
		<div class="col-xs-6">
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#friendslist">Friends List {{count($friends)}}</button>
		</div>
	</div>

	<!-- Modal -->
	<div id="friendrequests" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Pending Requests:</h4>
	      </div>
	      <div class="modal-body">
	        @foreach($pending_requests as $pr)
	        	<img src="{{$pr->avatar}}">{{$pr->name}}
	        	<form method="POST" action='{{url("acceptRequest/$pr->id")}}'>
		        {{ csrf_field() }}
		        <button class="btn btn-success">Accept</button>
		        </form>
		        <form method="POST" action='{{url("declineRequest/$pr->id")}}'>
		        {{ csrf_field() }}
		        <button class="btn btn-danger">Decline</button>
		        </form>
	        @endforeach
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div>

	<!-- Modal -->
	<div id="friendslist" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Friends:</h4>
	      </div>
	      <div class="modal-body">
	      <div class="row">
	        @foreach($friends as $f)
	        	<div class="col-xs-6">
	        	<img src="{{$f->avatar}}">
	        	<p>{{$f->name}}</p>
	        	</div>
	        @endforeach
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div>
	<h1>Users List</h1> <hr>
	<div class="row">
	@foreach($users as $user)
		<div class="col-xs-3" style="margin-bottom: 50px;" data-toggle="modal" data-target="#myModal{{$user->id}}">
		<img src="{{ $user->avatar }}">
		<h3>{{ $user->name }}</h3>
		</div>

		<!-- Modal -->
		<div id="myModal{{$user->id}}" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">{{$user->name}}</h4>
		      </div>
		      <div class="modal-body">
		        <div style="float:left;"><img src="{{$user->avatar}}"></div>
		        @if(Auth::user()->id != $user->id && !$connections->contains($user->id))
		        <form method="POST" action='{{url("addFriend/$user->id")}}'>
		        {{ csrf_field() }}
		        <button class="btn btn-success">Add as Friend</button>
		        </form>
		        @endif

		        @if($connections->contains($user->id) && count($pending_requests->where('id',$user->id)))
		        <form method="POST" action='{{url("acceptRequest/$user->id")}}'>
		        {{ csrf_field() }}
		        <button class="btn btn-success">Accept</button>
		        </form>
		        <form method="POST" action='{{url("declineRequest/$user->id")}}'>
		        {{ csrf_field() }}
		        <button class="btn btn-danger">Decline</button>
		        </form>
		        @endif
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>

		  </div>
		</div>
	@endforeach
	</div>
</div>

</body>
</html>