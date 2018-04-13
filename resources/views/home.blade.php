@extends('layouts.app')
@include('layouts.cabecalho')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        {{ Auth::user()->name }}, você está logado(a) no sistema de estoque.
                        <br>
                        Cuidado com o que você cadastra, altera ou exclui do sistema!

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
