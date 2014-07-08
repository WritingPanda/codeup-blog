<?php

class PostsController extends \BaseController {

	public function __construct()
	{
		// Include parent constructor
		parent::__construct();

		// Run an auth filter before all methods except index and show
		$this->beforeFilter('auth', ['except' => ['index', 'show']]);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$search = Input::get('search');
		$query = Post::with('user')->orderBy('created_at', 'desc');

		// Added search
		if(is_null($search))
		{
			$posts = $query->paginate(5);
		}
		else
		{
			$posts = $query->where('title', 'LIKE', "%{$search}%")
						   ->orWhere('body', 'LIKE', "%{$search}%")
						   ->paginate(5);
		}
		return View::make('posts.index')->with('posts', $posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create-edit');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return $this->update(null);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.show')->with('post', $post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.create-edit')->with('post', $post);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = new Post();
		$post->user_id = Auth::user()->id;
		
		if ($id !== null) {
			$post = Post::findOrFail($id);
		} 

		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails())
		{
			Session::flash('errorMessage', 'Post could not be updated - see form errors');
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
			
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			if (Input::hasFile('image') && Input::file('image')->isValid()) 
			{
				$post->addUploadedImage(Input::file('image'));
			}
			$post->save();

			Session::flash('successMessage', 'Post updated successfully!');
			return Redirect::action('PostsController@index');
		}
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$delete = Post::find($id);

		if ($delete == null) 
		{
			Session::flash('errorMessage', 'Post did not delete because it does not exist.');
		}
		else
		{
			Post::find($id)->delete();
			Session::flash('successMessage', 'Bye bye post!');
		}
		
		return Redirect::action('PostsController@index');
	}

}