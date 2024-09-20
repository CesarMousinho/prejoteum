@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                <form method='POST' action="{{ url('/postagem') }}">
                    @csrf

                    <div class="form-group">

                        <label for='categorias'>Escolha uma categoria:</label><br>

                            <select name="categoria_id" class="form-control" id="categoria_id">
                                @foreach ($categorias as $value)
                                    <option value="{{ $value->id }}"> {{ $value->nome }}</option>
                                @endforeach
                            </select>

    


                        <label for="exampleInputEmail1">Titulo</label>
                        <input type="text" name="titulo" class="form-control" placeholder="Digite o titulo da Postagem">

                        <label for="exampleInputEmail1">Conteudo</label>
                        <textarea type="long-text" name="conteudo" class="form-control" placeholder="Digite o conteúdo da Postagem">
                        </textarea>  
                    </div>
                        <input type="submit" value="ENVIAR">
                </form>

                   
            </div>
        </div>
    </div>
</div>
@endsection