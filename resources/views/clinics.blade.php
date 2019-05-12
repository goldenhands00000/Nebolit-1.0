@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Клиники</div>

                <div class="card-body">
                    @foreach($all as $one)
					<a href = "{{asset('clinic/'.$one->id)}}">
						{{$one->name}}</a><br />
					@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

