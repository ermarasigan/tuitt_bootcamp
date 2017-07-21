

<!DOCTYPE html>
<html>
<head>
	<title>Mocha Uson Blog</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/bootstrap.min.css')}}">

</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" style="background: darkblue;">
   <div class="navbar-text" style="color: white">Mocha Uson Blog</div>
</nav>

<input type="hidden" id="csrf" value={{csrf_token()}}></input>

<div class="container" style="margin-top: 100px">
	<div class="row">

		<div class="col-lg-9">
			
			@foreach($blogs as $blog)

				<div class="panel panel-default">
					<div class="panel-heading">
						<b>{{$blog->title}}</b>
					</div>
  					<div class="panel-body">
  						{{$blog->content}}

  						@foreach($blog->tag as $blogtag)
  							<div class="badge">
								{{$blogtag->name}}
							</div>
  						@endforeach

					</div>


					<div class="panel-footer text-right">
						<input id="{{$blog->id}}" type="text">
  						<button id="{{$blog->id}}" 
  								class="btn btn-default addTagBtn">
  							Add Tag
  						</button>
					</div>
				</div>
			@endforeach
		</div>

		<div class="col-lg-3">
			<h2>Tags</h2>
			@foreach($tags as $tag)
				<a href="tag/{{$tag->id}}">
					<div class="badge">
						{{$tag->name}}
					</div>
				</a>
			@endforeach
		</div>
	</div>
</div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     {{-- <script src="{{ asset('js/jquery.min.js') }}"></script> --}}

	<!-- Include all compiled plugins (below), or include individual files as needed -->{{-- 
    <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}


   <!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script type="text/javascript">

		$( document ).ready(function() {
			token = $('#csrf').val();

			$('.addTagBtn').click(function(){
				// Save tag name from input
				var blogID = this.id;
				var inputTag = $('#' + blogID).val();

				// Ajax function to add tag, post method
	   			$.ajax({
	   				url: "addTag",
	   				method: "POST",
	   				data: {
	   					blogID 		: blogID,
	     				inputTag 	: inputTag,
	     				_token 		: token
	   				},
	   				success: function(data){
		     			if (typeof data.response != 'undefined'){
		     				if(data.response == 'success'){
		     					location.reload();
		     				} else {
		     					console.log(data.response)	     		
		     				}
		     			} else {
		     				console.log('no return')
		     			}
	   				},
	   				error: function(response,data){
	   					console.log(response)
	   					console.log(data)
	   				}
	   			})
			});
		});

    </script>



</body>
</html>