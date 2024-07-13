@extends('templates.template')
@section('content')

<h1 class="text-center">CRUD</h1>
<hr>
<div>
    <div class="text-center mt-3 mb-4">
        <a href="{{url("books/create")}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>
    <div class="col-8 m-auto">
        <table class="table table-hover text-center">
            <caption>Lista dos Livros</caption>
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Título</th>
                    <th scope="col">Páginas</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($book as $books)
                <tr>
                    <th scope="row">{{$books->id}}</th>
                    <td>{{$books->title}}</td>
                    <td>{{$books->pages}}</td>
                    <td>{{$books->price}}Kz</td>
                    <td>
                        <a href="{{url("books/$books->id")}}">
                            <button class="btn btn-dark">Visualizar</button>
                        </a>
                        <a href="{{url("books/$books->id/edit")}}">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        <form class="d-inline" method="post" Action="{{ route('books.destroy', [$books->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection