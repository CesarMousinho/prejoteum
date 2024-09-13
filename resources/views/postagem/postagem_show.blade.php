@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <p> {{ $postagem->titulo }}</p> 

                    
            </div>
        </div>
    </div>
</div>
@endsection