extends('master')

@section('content')

{{ Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'put']) }}
	<div>
		<label>Title</label>
		{{ Form::text('title') }}
		@if($errors->first('title'))<span>{{$errors->first('title')}}</span> @endif
	</div>
	<div>
		<label>Body</label>
		{{ Form::textarea('body') }}
		@if($errors->first('body'))<span>{{$errors->first('body')}}</span> @endif
	</div>
	<div>
		{{ Form::submit('Update') }}
	</div>
{{ Form::close() }}

@stop