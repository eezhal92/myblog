<form action="{{ route('posts.store') }}" method="post">
	{{ Form::token() }}
	<div>
		<label>Title</label>
		<input type="text" name="title">
	</div>
	<div>
		<label>Body</label>
		<textarea></textarea>		
	</div>
	<div>
		<input type="submit" value="save">
	</div>
</form>