<h1>INI INDEX NYA POSTS </h1>

@foreach($artikel as $a)
  {{ $a->title }}<br>
  {{ $a->body }} <br>
  <hr>	
@endforeach