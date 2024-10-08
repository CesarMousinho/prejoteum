@extends('adminlte::page')

<!-- -------- ABERTURA DO EDITOR RICO ----------- -->

<link rel="stylesheet" href="{{url('/richtexteditor/rte_theme_default.css')}}" />
<script type="text/javascript" src="{{url('/richtexteditor/rte.js')}}"></script>
<script type="text/javascript" src="{{url('/richtexteditor/plugins/all_plugins.js') }}"></script>

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

                <form method = 'POST' action= "{{ URL( '/postagem/' . $postagem->id )}}" >
                    @method('PUT')
                    @csrf

                    <label for='categorias'>Escolha uma categoria:</label><br>

                            <select name="categoria_id" class="form-control" id="categoria_id">
                                @foreach ($categorias as $value)

                                    @if($value->id == $postagem->categoria_id)
                                        <option selected="selected" value="{{ $value->id }}"> {{ $value->nome }}</option>
                                    @else
                                        <option value="{{ $value->id }}"> {{ $value->nome }}</option>
                                    @endif

                                    <option value="{{ $value->id }}"> {{ $value->nome }}</option>
                                @endforeach
                            </select>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Titulo</label>
                        <input type="text" name="titulo" value="{{ $postagem->titulo }}" class="form-control" placeholder="Digite o titulo da Postagem">

                        <label for="exampleInputEmail1">Conteúdo</label>
                        <textarea type="long-text" id="inp_editor1" name="conteudo" class="form-control" placeholder="Digite o conteúdo da Postagem">{{ $postagem->conteudo }}</textarea>   
                    </div>
                        <input type="submit" value="ENVIAR">
                </form>

                   
                <!-- -------- FECHAMENTO DO EDITOR RICO------- -->
                     
                <script>
                        var editor1 = new RichTextEditor("#inp_editor1");
                    </script>

            </div>
        </div>
    </div>
</div>
@endsection