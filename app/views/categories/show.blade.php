<h1>{{ $category->name }}</h1>

<p>Kategori ini memiliki artikel </p>
<ul>
@foreach($category->posts as $a)
  <li> {{ $a->title }} </li>
@endforeach
</ul>