<h1>INI INDEX NYA POSTS </h1>

@foreach($artikel as $a)
  {{ $a->title }}<br>
  {{ $a->body }} <br>
  <div>
  	{{ link_to_route('posts.show', 'Lihat', [$a->id]) }}
  	{{ link_to_route('posts.edit', 'Edit', [$a->id]) }}
  	{{ Form::open(['route' => ['posts.destroy', $a->id], 'method' => 'delete']) }}
  		{{ Form::submit('Hapus') }}
  	{{ Form::close() }}
  </div>
 <hr>	
@endforeach