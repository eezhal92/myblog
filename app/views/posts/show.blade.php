<h1>{{ $post->title }}</h1>

{{ $post->body }}<br>

<b>category artikel ini</b>
<ul>
@foreach($post->categories as $cat)
	</li>{{ $cat->name }}</li><br>
@endforeach
</ul>