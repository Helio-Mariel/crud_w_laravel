@extends('templates.template')

@section('content')
<h1 class="text-center">Editar</h1>
<hr>
<div>
    <div class="col-9 m-auto">
        <form name="formCad" id="formCad" method="post" action="{{ route('book.update', [$book->id]) }}">
            @csrf
            @method('PUT')
            <input class="form-control" type="text" name="title" id="title" placeholder="Título:" value="{{$book->title}}"><br>
            <input class="form-control" type="number" name="pages" id="pages" placeholder="Páginas:" value="{{$book->pages}}"><br>
            <input class="form-control" type="text" name="price" id="price" placeholder="Preço:" value="{{$book->price}}"><br>
            <button class="btn btn-success" type="submit">Editar</button>
        </form>
    </div>
</div>
@endsection