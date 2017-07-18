<!--}} <!DOCTYPE html>
<html>
<head>
	<title>Article List</title>
</head>
<body>

	<h3>List of Articles</h3>
	<ul>
		<li>{{-- $article1 --}}</li>
		<li>{{-- $article2 --}}</li>
	</ul>
	
</body>
</html> -->

@extends("../layout/master")


@section("title")
	{{ $title }}
@endsection

@section("main_content")
	<button class="btn btn-default">
		<a href='{{ url("/create") }}'>Create new article</a>
	</button>

	<ul>
		<!-- <li>
			{{-- $article1--}}
		</li>
		<li>
			{{-- $article2--}}
		</li> --> 

		@foreach($articles as $article)
		<a href='{{ url("/home/$article->id") }}'>
			<li>
				{{ $article->title}}  {{ $article->content }} <br>
			</li>
		</a>
			@foreach($article->comments as $comment)
				<div class="row">
					<div class="col-xs-2">
					</div>
					<div class="col-xs-10">
						{{ $comment->content }} {{ $comment->updated_at }}	
					</div>
				</div>
			@endforeach
		<div>
			<a href='{{ url("/home/edit/$article->id") }}'><button class="btn btn-warning">Edit</button></a>
			<a href='{{ url("/home/delete/$article->id") }}'><button class="btn btn-danger">Delete</button></a>
		</div>
		@endforeach
	</ul>
@endsection