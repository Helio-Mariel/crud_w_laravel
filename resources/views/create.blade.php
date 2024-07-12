@extends('templates.template')

@section('content')
<h1 class="text-center">Cadastrar</h1>
<hr>
<div>
    <div class="col-9 m-auto">
        <form name="formCad" id="formCad" method="post" action="{{url('books')}}">
            @csrf
            <input class="form-control" type="text" name="title" id="title" placeholder="Título:"><br>
            <input class="form-control" type="text" name="pages" id="pages" placeholder="Páginas::"><br>
            <input class="form-control" type="text" name="price" id="price" placeholder="Preço:"><br>
            <select class="form-control" name="id_person" id="id_person">
                <option value="">Selecione:</option>
                @foreach ($person as $persons)
                <option value="{{$persons->id}}">{{$persons->name}}</option>
                @endforeach
            </select><br>
            <input class="btn btn-success" type="submit" value="Cadastrar">

        </form>
    </div>
</div>
@endsection