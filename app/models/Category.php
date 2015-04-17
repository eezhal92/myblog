<?php

class Category extends Eloquent
{
	/*
	*
	* untuk property yang bisa diisi
	*
	*/
	protected $fillable = ['name', 'slug'];

	protected $table = 'categories';

	public function posts()
	{
		return $this->belongsToMany('Post', 'post_categories');
	}


} 