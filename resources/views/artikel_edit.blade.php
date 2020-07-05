<form action="/artikel/{{$artikel->id}}" method="post">
    {{ csrf_field() }}
    @method('put')
    judul <br>
    <input type="text" name="judul" id="judul" value="{{$artikel->judul}}"> <br>
    isi <br>
    <input type="text" name="isi" id="isi" value="{{$artikel->isi}}"> <br>
    tag (input pisahkan koma) <br>
    <input type="text" name="tag" id="tag" value="{{$artikel->tag}}"> <br>
    <input type="submit" value="submit">

</form>