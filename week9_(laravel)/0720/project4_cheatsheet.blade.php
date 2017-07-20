Project 4 - Blog with tags (07/20)

1) Copy template

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

	a) Blog
    function tag(){
        return $this->belongsToMany(
        	'App\Tag', 'blogs_tags', 
        	'blog_id', 'tag_id');
    }

    b) Tag
    function blog(){
        return $this->belongsToMany(
        	'App\Blog', 'blogs_tags', 
        	'tag_id', 'blog_id');
    }

10) VIEW (resources\views)

	@foreach($blogs as $blog)

	{{$blog->title}}
	{{$blog->content}}
	
		@foreach($blog->tag as $blogtag)
			{{$blogtag->name}}
  		@endforeach

	@endforeach


11) CONTROLLER (app\http\controllers)

	a) Blog
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