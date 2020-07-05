@extends('layouts/master')
@section('content')

<ol>
    <table class="tg">
    <tbody>
    @foreach($list_artikel as $artikel)
    <tr>
        <td class="tg-0lax">  <a href="/artikel/{{$artikel->id}}"> {{ $artikel->judul }}</a></td>
    </tr>
    @endforeach
    </tbody>
    </table>
</ol>

<br><br>
<a href='/artikel/create'> Tambah Artikel  </a>



<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>

@endsection