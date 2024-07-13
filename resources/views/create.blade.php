@extends('templates.template')

@section('content')
<h1 class="text-center">Cadastrar</h1>
<hr>
<div>
    <div class="col-9 m-auto">
        <form id="formCad" method="post" action="{{ route('book.create') }}">
            @csrf
            @method('POST')
            <input class="form-control" type="text" name="title" id="title" placeholder="Título"><br>
            <input class="form-control" type="number" name="pages" id="pages" placeholder="Páginas"><br>
            <input class="form-control" type="text" name="price" id="price" placeholder="Preço"><br>
            <button class="btn btn-success" type="submit">Cadastrar</button>
        </form>
    </div>
</div>
@endsection