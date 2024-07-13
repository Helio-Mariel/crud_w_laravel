@extends('templates.template')

@section('content')
<h1 class="text-center">Visualizar</h1>
<hr>
<div>
    <div class="col-10 m-auto">
        @php
        $person=$book->find($book->id)->relPersons;
        @endphp
        <h5>Sobre o Livro:</h5>
        Título: {{$book->title}}<br>
        Páginas: {{$book->pages}}<br>
        Preço: {{$book->price}}<br>
        <hr>


    </div>
</div>
@endsection