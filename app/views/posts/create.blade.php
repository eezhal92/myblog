@extends('master')

@section('content')

<form action="{{ route('posts.store') }}" method="post">
	{{ Form::token() }}
	<div>
		<label>Title</label>
		<input type="text" name="title" value="@if(Input::old('title')){{Input::old('title')}}@endif">
		@if($errors->first('title')) <span>{{ $errors->first('title') }}</span> @endif
	</div>
	<div>
		<label>Body</label>
		<textarea name="body">@if(Input::old('body')){{Input::old('body')}}@endif</textarea>
		@if($errors->first('body')) <span>{{ $errors->first('body') }}</span> @endif			
	</div>
	<div>
		<input type="submit" value="save">
	</div>
</form>

@stop