<form action="/artikel" method="post">
    {{ csrf_field() }}
    judul <br>
    <input type="text" name="judul" id="judul"> <br>
    isi <br>
    <input type="text" name="isi" id="isi"> <br>
    tag (input pisahkan koma) <br>
    <input type="text" name="tag" id="tag"> <br>
    <input type="submit" value="submit">

</form>