<head> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> </head>

<h1> {{ $artikel->judul }} </h1>
<h2> {{ $artikel->isi }} </h2>
<a href="/artikel/{{$artikel->id}}/edit"> edit </a>
<br><br>


<?php $tags = explode(",", $artikel->tag);?>
@foreach($tags as $tag)
<button type="button" class="btn btn-primary">{{ $tag }}</button>
@endforeach
<br><br>

<form action="/artikel/{{$artikel->id}}" method="post">
    <input class="btn btn-default" type="submit" value="Delete" />
    @method('delete')
    @csrf
</form>