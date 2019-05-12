@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{asset('clinics')}}">Клиники</a> {{$obj->name}}</div>

                <div class="card-body">
                    Адрес: {{$obj->adress}}
					<br/>
					{!!$obj->description!!}
					<hr>
					@foreach($obj->comments()->get() as $one)
					
				<div>
				{{$one->name}}
				<hr>
				{{$one->text}}
				<hr>
                </div>
				@endforeach
            </div>
        </div>
    </div>
</div>
@endsection

