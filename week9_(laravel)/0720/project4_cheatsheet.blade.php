Project 4 - Blog with tags (07/20)

0) NOTES: When pushing/pulling laravel files,
vendor folder and .env are not copied to/from github by default
(see .gitignore)

    Add bootstrap files (css/js) in public folder and access in view by:
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/bootstrap.min.css')}}">


1) Copy template laravel files

2) Set up db environment

	.env
		DB_DATABASE=project4
		DB_USERNAME=root
		DB_PASSWORD=

3) Create database (cmd)

	open xampp
	cd users\day4\desktop\xampp\mysql\bin\
  	mysql -u root
	create database project4;

4) Edit AppServiceProviders (app\provider)

	use Schema;
	public function boot()
    	{
        	Schema::defaultStringLength(191);
    	}

5) Create model/migration/controller files (bash)

	a) php artisan make:model Blog -m -c
	b) php artisan make:model  Tag -m -c

		{no need to create model for pivot table}
	c) php artisan make:migration createBlogsTagsTable --create=blogs_tags

6) Edit migration files (database/migration)

	a) blogs_table
    Schema::create('blogs', function (
Blueprint $table) {
        $table->increments('id');
        $table->string('title');
        $table->text('content');
        $table->timestamps();
    });

    b) tags_table
    Schema::create('tags', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->timestamps();
    });

    c) BlogsTagsTable
    Schema::create('blogs_tags', 
function (Blueprint $table
) {
        $table->increments('id');
        $table->integer('blog_id');
        $table->integer('tag_id');
        $table->timestamps();
    });


7) Create database in mysql (bash)

	php artisan migrate
	:rollback - if you want to undo migrate 

8) Seed table

	a) php artisan make:seeder BlogsTagsSeeder

	b) (database/seeds)

    $faker = Faker\Factory::create();
    $limit = 10;
    for ($i = 0; $i < $limit; $i++){
    	DB::table('blogs')->insert([ //,
    		'title' => $faker->realText($
maxNbChars = 50, $indexSize = 
2),
    		'content' => $faker->realText($
maxNbChars = 500, $indexSize =
 2),
    	]);
    };
    for ($i = 0; $i < $limit; $i++){
    	DB::table('tags')->insert([ //,
    		'name' => $faker->safeColorName,
    	]);
    };	

	c) php artisan db:seed --class=BlogsTagsSeeder

9) MODEL - eloquent relationships in app\

	a) Blog (each blog can have many tags)

        class Blog extends Model
        {
            function tag(){
                return $this->belongsToMany(
                	'App\Tag', 'blogs_tags', 
                	'blog_id', 'tag_id');
            }
        }

    b) Tag (each tag can have many blogs)

        class Tag extends Model
        {
            function blog(){
                return $this->belongsToMany(
                	'App\Blog', 'blogs_tags', 
                	'tag_id', 'blog_id');
        }

10) VIEW (resources\views\blogs.blade.php)

	@foreach($blogs as $blog)

	{{$blog->title}}
	{{$blog->content}}
	
        //$blog->tag is shortcut for $blog->tag()->get()
        // to select tag/s associated with the blog
		@foreach($blog->tag as $blogtag)
			{{$blogtag->name}}
  		@endforeach

	@endforeach


11) CONTROLLER (app\http\controllers)

	a) BlogController

    	use App\Blog;
    	use App\Tag;
        function showBlogs(){
        	$blogs = Blog::all();
        	$tags = Tag::all();

       	 	return view('blogs', compact('blogs','tags'));
        }

12) ROUTE (web.php)

	Route::get('/home', 'BlogController@showBlogs');
	
13) Serve laravel (bash)
	
	php artisan serve
	http://127.0.0.1:8000

14) Displaying blogs for each tag

    a) In homepage view, add anchor for each tag

        @foreach($tags as $tag)
            <a href="tag/{{$tag->id}}">
                <div class="badge">
                    {{$tag->name}}
                </div>
            </a>
        @endforeach

    b) Create another view for tagged blogs
        (resources\views\blogstagged.blade.php)

        @foreach($blogs as $blog)
        {{$blog->title}}
        {{$blog->content}}
            @foreach($blog->tag as $blogtag)
                {{$blogtag->name}}
            @endforeach
        @endforeach

        {{$tag->name}}

    c) Edit controller to add function
        (app\http\controllers\TagController)

        function showBlogs($id){
            // Save tag details from model given the ID
            $tag = Tag::find($id);

            // Save details for blogs associated to tag
            $blogs = $tag->blog;

            return view('blogstagged', compact('blogs','tag'));
        }

    d) Edit Route to point to controller function
        (routes\web.php)

        Route::get('/tag/{id}', 'TagController@showBlogs');

15) Adding tags thru ajax

    a) Make sure to add js/jquery CDNs

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    b) For post method, include a hidden token input

    <input type="hidden" id="csrf" value={{csrf_token()}}></input>

    c) In homepage view, set html ID of Add Tag button as the blog ID
        and add class "addTagBtn", and also set html ID of input

    @foreach($blogs as $blog)
        <input id="{{$blog->id}}" type="text">
        <button id="{{$blog->id}}" 
            class="btn btn-default addTagBtn">
            Add Tag
        </button>
    @endforeach

    d) In script section (view), define Add Tag function triggered by click

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
                        blogID      : blogID,
                        inputTag    : inputTag,
                        _token      : token
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
        
    e) In Route (web.php), point to controller function using post method

    Route::post('/addTag', 'BlogController@addTag');

    f) Define addTag function in controller

    public function addTag(Request $request){

        $inputTag = $request->inputTag;
        $blogID = $request->blogID;

        if ($request->isMethod('post')){

            // Find the blog sent thru ajax
            $blog = Blog::find($blogID);

            //Check if tag already exists
            $tag = Tag::where('name','=',$inputTag)->first(['id','name']);
            $hasTag = Tag::where('name','=',$inputTag)->count();

            if($hasTag){
                // Check if tag is already associated to blog
                $hasBlogTag = $blog->tag()->where('tag_id', $tag->id)->exists();
                if($hasBlogTag){
                    return response()->json(['response' => 'tag exists']);
                } else {
                    $blog->tag()->attach($tag->id);
                }
            } else {
                // Create new tag if none
                $new_tag = new Tag();
                $new_tag->name = $inputTag;
                $new_tag->save();

                // Find the new tag
                $new_tag = Tag::where('name','=',$inputTag)->first(['id']);

                // Insert record to pivot row to associate tag with blog
                $blog->tag()->attach($new_tag->id);
            }
            // // Output response to send to ajax
            return response()->json(['response' => 'success']);
        } 
        // Reload page in ajax instead
        // return redirect('/home');
    }