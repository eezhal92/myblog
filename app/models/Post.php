<?php

class Post extends Eloquent
{
	/*
	*
	* untuk property yang bisa diisi
	*
	*/
	protected $fillable = ['title', 'body', 'slug'];

	protected $table = 'posts';

	public function categories()
	{
		return $this->belongsToMany('Category', 'post_cateogories');
	}

} 