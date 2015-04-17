<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();

		return View::make('posts.index')->with('artikel', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// dd(Input::all());
		$validator = Validator::make(
			[
 				'title' => Input::get('title'),
 				'body' => Input::get('body')
			], 
			[
				'title' => 'required|min:2',
				'body' => 'required'
			]
		);

		if($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$post = Post::create([
			'title' => Input::get('title'),
			'body' => Input::get('body'),
			'slug' => Str::slug(Input::get('title')) // eg: Hello World -> hello-world
		]);

		if($post) {
			return Redirect::route('posts.index')
					->with('message', 'Post has been created');
		} else {
			return Redirect::route('posts.index')
					->with('message', 'Failed on saving a post');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);

		return View::make('posts.show', compact('post'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);

		return View::make('posts.edit', compact('post'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(
			[
 				'title' => Input::get('title'),
 				'body' => Input::get('body')
			], 
			[
				'title' => 'required|min:2',
				'body' => 'required'
			]
		);

		if($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$post = Post::find($id)->update([
			'title' => Input::get('title'),
			'body' => Input::get('body'),
			'slug' => Str::slug(Input::get('title')) // eg: Hello World -> hello-world
		]);

		if($post) {
			return Redirect::route('posts.index')
					->with('message', 'Post has been update');
		} else {
			return Redirect::route('posts.index');
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
		$post = Post::find($id);

		if($post->delete()) {
			return Redirect::route('posts.index');
		}
	}


}
