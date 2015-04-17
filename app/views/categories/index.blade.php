<h1>Ini adalah list kategori</h1>

@foreach($kategori as $a)
{{ $a->name }}<br>
{{ $a->slug }}
@endforeach