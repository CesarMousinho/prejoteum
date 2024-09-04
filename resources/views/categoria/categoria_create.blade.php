@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <form action="{{ url('/categoria') }}" method="get">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" placeholder="Escreva seu nome">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <input type="submit" value="ENVIAR">
                </form>

                    //PAROU NO MINUTO 31 DO VIDEO UM DO CRUD
            </div>
        </div>
    </div>
</div>
@endsection