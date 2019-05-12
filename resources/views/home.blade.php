@extends('layouts.app')

@section('content')

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Неболит</h1>
            <p>Tractata Sunt!</p>
            <p><a class="btn btn-primary btn-lg" href="{{route('about_us')}}" role="button">Узнать больше&raquo;</a></p>
        </div>
    </div>





<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">

                            {{ session('status') }}
                        </div>
                    @endif

                    Вы успешно вошли в аккаунт
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
