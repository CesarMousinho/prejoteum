@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <a href="{{ url('/categoria/create  ') }}" class="btn btn-success btn-md active" role="button" aria-pressed="true">CRIAR</a>

                @if (session('mensagem '))
                    <div class="alert alert-sucess">
                        {{ session('mensagem') }}
                    </div>
                @endif



                    <table>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th class='text-center'>Ações</th>
                            </tr>

                            @foreach($categorias as $value)
                            <tr>
                                <td>{{ $value->id}}</td>
                                <td>{{ $value->nome}}</td>
                                <td class='d-flex justify-content-between'>
                                <a href="{{ url('/categoria/' .  $value->id) }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Visualizar</a>

                                <a href="{{ url('/categoria/' .  $value->id) . '/edit' }}" class="btn btn-warning btn-sm active" role="button" aria-pressed="true">Editar</a>

                                <form method=POST action={{ url('/categoria/' . $value->id)}}>
                                    @method('DELETE')
                                    @csrf
                                    <input type='submit'class='btn btn-danger btn-sm active' value='Excluir'>
                                    </form> 
                                </td>
                                
                            </tr>
                            @endforeach
                    </table>    
            </div>
        </div>
    </div>
</div>  
@endsection
